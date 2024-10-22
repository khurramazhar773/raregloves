<?php
include("config.php");

if (isset($_POST['submit'])) {
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $phone = $_POST['contact-telephone'];
    $address = $_POST['contact-address'];
    $message = $_POST['contact-message'];

    // Prepare the SQL statement
    $sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `address`, `message`) VALUES (:name, :email, :phone, :address, :message)";
    
    try {
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':message', $message);
        
        // Execute the statement
        $stmt->execute();
        
        // Redirect if successful
        header("location: ../../contact.html");
        exit(); // Make sure to exit after the redirect
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

