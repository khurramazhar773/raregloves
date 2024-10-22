<?php
session_start();

include 'config.php';

$log = "SELECT id, user_n, password FROM admin_login";
$loginResult = $conn->query($log);

$list = $loginResult->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['submit'])){
    $username = $_POST['userName'];
    $userPassword = $_POST['userPassword'];

    if(isset($userPassword) && ($userPassword === $list['password'])){
        $_SESSION['loggedin'] = true;
        header('location: ../../admin/contact-penal.php');
    }
    else{
        header('location: ../../admin/admin-login.html');
        echo '<script>
            alert("Wrong Password!");
        </script>';
    }

}

?>