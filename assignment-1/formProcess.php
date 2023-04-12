<?php
session_start();
include("database.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
        
        echo "Please fill all the required details";
       
    } else {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        
        if(mysqli_query($conn, $sql)){
            header("Location: successful.php");
            exit;
        } 
    }
}
?>