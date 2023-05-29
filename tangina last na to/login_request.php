<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    if (empty($username) || empty($password)) {
        $error = "Please enter your student number and password." . $conn->error;
    }
    else {
        $sql = "SELECT * FROM `user_info` WHERE `username`='$username' AND `password`='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Login successful
            session_start();
            $_SESSION["username"] = $username;
            header('Location: home.html');
            exit();
        } else {
            // Login failed
            $error = "Incorrect username or password." . $conn->error;
        }
    } 
    
    // Pass error message back to register.php
    if (isset($error)) {
        header('Location: index.php?error=' . urlencode($error));
        exit();
    }
}
?>
