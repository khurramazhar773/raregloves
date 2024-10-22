<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get POST data
    $heading = $_POST['heading'];
    $description = $_POST['detail'];
    $category = $_POST['category'];
    $imageFile = $_FILES['image'];

    try {
        // Check if the category already exists
        $checkCategory = $conn->prepare("SELECT id FROM categories_2 WHERE category_name = :category_name");
        $checkCategory->bindParam(':category_name', $category, PDO::PARAM_STR);
        $checkCategory->execute();

        // Initialize category_id
        $category_id = null;

        // If the category does not exist, insert it
        if ($checkCategory->rowCount() === 0) {
            // Insert the new category
            $insertCategory = $conn->prepare("INSERT INTO categories_2 (category_name) VALUES (:category_name)");
            $insertCategory->bindParam(':category_name', $category, PDO::PARAM_STR);
            if ($insertCategory->execute()) {
                // Get the newly created category ID
                $category_id = $conn->lastInsertId();
            } else {
                throw new Exception("Error adding category: " . implode(", ", $insertCategory->errorInfo()));
            }
        } else {
            // If the category exists, fetch its ID
            $result = $checkCategory->fetch(PDO::FETCH_ASSOC);
            $category_id = $result['id'];
            echo "Category already exists: " . htmlspecialchars($category);
        }

        // Check if the image was uploaded without error
        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            // Validate the file type and size (optional)
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($_FILES['image']['type'], $allowedTypes)) {
                throw new Exception("Invalid file type. Only JPG, PNG, and GIF files are allowed.");
            }

            // Read the image file into a variable
            $imageData = file_get_contents($_FILES['image']['tmp_name']);

            // Insert product data into the database, storing image data as a BLOB
            $insertProduct = $conn->prepare("INSERT INTO products_2 (category_id, product_name, description, image_url) 
                VALUES (:category_id, :product_name, :description, :image_url)");
            $insertProduct->bindParam(':category_id', $category_id, PDO::PARAM_INT);
            $insertProduct->bindParam(':product_name', $heading, PDO::PARAM_STR);
            $insertProduct->bindParam(':description', $description, PDO::PARAM_STR);
            $insertProduct->bindParam(':image_url', $imageData, PDO::PARAM_LOB); // Use PDO::PARAM_LOB for BLOB data

            // Execute the insert statement
            if ($insertProduct->execute()) {
                // Redirect after successful insertion
                header('Location: ../../admin/fancy-create-panel.html');
                exit; // Always exit after header redirection
            } else {
                throw new Exception("Error adding product: " . implode(", ", $insertProduct->errorInfo()));
            }
        } else {
            throw new Exception("Sorry, there was an error uploading your file. Error Code: " . $_FILES['image']['error']);
        }
    } catch (PDOException $e) {
        // Log the PDO exception
        error_log("Database error: " . $e->getMessage());
        echo "A database error occurred. Please try again later.";
    } catch (Exception $e) {
        // Log general exceptions
        error_log("Error: " . $e->getMessage());
        echo "An error occurred: " . htmlspecialchars($e->getMessage());
    }
}
?>
