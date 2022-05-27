<?php

require("connect.php");

// print_r($_POST);


$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$username = $_POST["username"];
$number = $_POST["number"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO users (first_name, last_name, username, phone_no, email, password, type) 
VALUES ('$first_name', '$last_name', '$username', '$number', '$email', '$password', 'user')";

mysqli_query($connection, $sql);