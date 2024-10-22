<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    // Get the blog ID from the POST data
    $blog_id = $_POST['blog_id'];

    // Prepare the delete statement
    $stmt = $conn->prepare("DELETE FROM blogs WHERE id = :id");
    $stmt->bindParam(':id', $blog_id, PDO::PARAM_INT);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Blog post deleted successfully!";
        header('Location: ../../admin/blog-del.php'); // Redirect back to the blog list
        exit();
    } else {
        echo "Error deleting blog post: " . $stmt->errorInfo()[2];
    }

    // Close statement
    $stmt->closeCursor();
}

$conn = null; // Close the database connection
?>
