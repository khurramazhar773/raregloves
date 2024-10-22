<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $product_id = $_POST['product_id'];
    $u_for = $_POST['u_for'];
    $u_name = $_POST['u_name'];
    $imageFile = $_FILES['image'];

    // Initialize update query
    $update_query = "UPDATE `products_2` SET `product_name` = :product_name, `description` = :description";

    // Check if the image file is uploaded
    if (!empty($imageFile['name'])) {
        // Read the image file into a variable
        $imageData = file_get_contents($imageFile['tmp_name']);
        
        // Prepare to include image data in the update query
        $update_query .= ", `image_url` = :image_url WHERE `id` = :id";
    } else {
        $update_query .= " WHERE `id` = :id"; // Just update without image
    }

    // Prepare statement
    $stmt = $conn->prepare($update_query);

    // Bind parameters
    $stmt->bindParam(':product_name', $u_name, PDO::PARAM_STR);
    $stmt->bindParam(':description', $u_for, PDO::PARAM_STR);
    
    if (!empty($imageFile['name'])) {
        $stmt->bindParam(':image_url', $imageData, PDO::PARAM_LOB); // Bind the image data as a BLOB
    }
    
    $stmt->bindParam(':id', $product_id, PDO::PARAM_INT); // Always bind the product ID

    // Execute the query
    if ($stmt->execute()) {
        echo "Product updated successfully!";
        header('Location: ../../admin/fancy-edit.php');
        exit();
    } else {
        echo "Error updating product: " . $stmt->errorInfo()[2];
    }

    $stmt->close(); // Close the prepared statement
} else {
    echo "Invalid request method.";
}

$conn = null; // Close the database connection
?>
