<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get POST data
    $heading = $_POST['heading'];
    $description = $_POST['detail'];
    $category = $_POST['category'];
    $imageFile = $_FILES['image'];

    // Check if the category already exists
    $checkCategory = $conn->prepare("SELECT id FROM categories WHERE category_name = :category_name");
    $checkCategory->bindParam(':category_name', $category, PDO::PARAM_STR);
    $checkCategory->execute();

    // Initialize category_id
    $category_id = null;

    // If the category does not exist, insert it
    if ($checkCategory->rowCount() === 0) {
        // Insert the new category
        $insertCategory = $conn->prepare("INSERT INTO categories (category_name) VALUES (:category_name)");
        $insertCategory->bindParam(':category_name', $category, PDO::PARAM_STR);
        if ($insertCategory->execute()) {
            $category_id = $conn->lastInsertId();
        } else {
            echo "Error adding category: " . $insertCategory->errorInfo()[2];
        }
    } else {
        // If the category exists, fetch its ID
        $result = $checkCategory->fetch(PDO::FETCH_ASSOC);
        $category_id = $result['id'];
        echo "Category already exists: " . $category;
    }

    // Check if the image was uploaded without error
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        // Read the image file into a variable
        $imageData = file_get_contents($_FILES['image']['tmp_name']);

        // Insert product data into the database, storing image data as a BLOB
        $insertProduct = $conn->prepare("INSERT INTO products (category_id, product_name, description, image_url) 
            VALUES (:category_id, :product_name, :description, :image_url)");
        $insertProduct->bindParam(':category_id', $category_id, PDO::PARAM_INT); // Corrected binding here
        $insertProduct->bindParam(':product_name', $heading, PDO::PARAM_STR);
        $insertProduct->bindParam(':description', $description, PDO::PARAM_STR);
        $insertProduct->bindParam(':image_url', $imageData, PDO::PARAM_LOB); // Use PDO::PARAM_LOB for BLOB data

        // Execute the insert statement
        if ($insertProduct->execute()) {
            echo "Product added successfully!";
            header('Location: ../../admin/industery-create-panel.html');
            exit; // Always exit after header redirection
        } else {
            echo "Error adding product: " . $insertProduct->errorInfo()[2];
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
