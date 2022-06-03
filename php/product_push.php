<?php

require("connect.php");

print_r($_POST);


$product_name = $_POST["pname"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$description = $_POST["pdescription"];
$category = $_POST["category"];
$img = $_POST["img"];

$sql = "INSERT INTO products (product_name, product_description, product_price, product_img, stock) 
VALUES ('$product_name', '$description', '$price', '$img', '$stock')";

mysqli_query($connection, $sql);