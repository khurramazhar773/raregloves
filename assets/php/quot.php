<?php
include("config.php");

if (isset($_POST['submit']) && isset($_POST['quote-message'])) {
    $name = $_POST['quote-name'];
    $email = $_POST['quote-email'];
    $phone = $_POST['quote-telephone'];
    $message = $_POST['quote-message'];

    // Prepare the SQL statement
    $sql = "INSERT INTO `quot` (`q-name`, `q-email`, `q-phone`, `quots`) VALUES (:name, :email, :phone, :message)";

    try {
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':message', $message);
        
        // Execute the statement
        $stmt->execute();
        
        // Redirect if successful
        header("location: ../../home-2.html");
        exit(); // Ensure to stop further execution after redirect
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

