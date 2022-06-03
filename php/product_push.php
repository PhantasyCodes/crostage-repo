<?php

require("connect.php");

print_r($_POST);


$product_name = $_POST["pname"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$description = $_POST["pdescription"];
$category = $_POST["category"];
$img = $_POST["img"];

// $sql = "INSERT INTO users (first_name, last_name, username, phone_no, email, password, type) 
// VALUES ('$first_name', '$last_name', '$username', '$number', '$email', '$password', 'user')";

// mysqli_query($connection, $sql);