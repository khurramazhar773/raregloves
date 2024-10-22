<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get POST data
    $title = $_POST['title'];
    $heading = $_POST['heading'];
    $description = $_POST['full_detail'];

    // Image handling
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        // Read the image file as binary data
        $imageData = file_get_contents($_FILES['image']['tmp_name']);
    } else {
        $imageData = null; // Handle case where no new image is uploaded
    }

    // Prepare statement
    $stmt = $conn->prepare("INSERT INTO blogs (title, excerpt, content, image) VALUES (:title, :heading, :description, :image)");

    // Bind parameters using named placeholders
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':heading', $heading, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':image', $imageData, PDO::PARAM_LOB); // Use PDO::PARAM_LOB for BLOB data

    // Execute the query
    if ($stmt->execute()) {
        echo "Product added successfully!";
        header('Location: ../../admin/industery-create-panel.html');
        exit(); // Always exit after header redirection
    } else {
        echo "Error adding product: " . $stmt->errorInfo()[2]; // Use errorInfo() for PDO errors
    }
    
    // Close statement
    $stmt->closeCursor(); // Close the statement cursor
}

$conn = null; // Close the database connection
?>
