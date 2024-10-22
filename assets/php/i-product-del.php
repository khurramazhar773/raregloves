<?php
include 'config.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the product ID from POST data
    $product_id = $_POST['product_id'];

    $del = "DELETE FROM products WHERE id = $product_id";
    $deleteProduct = $conn->query($del);

    if ($deleteProduct) {
        echo "Product deleted successfully!";
        // Redirect to the products page or another page after successful deletion
        header("Location: ../../admin/industrial-edit.php");
        exit();
    } else {
        echo "Error deleting product: " . $deleteProduct->error;
    }

    // Close the prepared statement and the connection
    $deleteProduct->close();
}

$conn->close();
?>
