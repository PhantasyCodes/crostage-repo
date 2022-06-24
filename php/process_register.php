<?php

require("connect.php");

// print_r($_POST);


$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$username = $_POST["username"];
$number = $_POST["number"];
$email = $_POST["email"];
$password = $_POST["password"];
$filename = $_FILES['file']['name'];

$location = "../images/".$filename;

if( move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
    echo 'File uploaded succesfully';
}

$sql = "INSERT INTO users (first_name, last_name, username, profile_picture, phone_no, email, password, type) 
VALUES ('$first_name', '$last_name', '$username', '$filename', '$number', '$email', '$password', 'user')";

mysqli_query($connection, $sql);