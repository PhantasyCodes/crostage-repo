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

$prod_id = "SELECT product_id FROM products WHERE product_name = '$product_name';";

$result = mysqli_query($connection, $prod_id);

$prod_id_result = mysqli_fetch_array($result, MYSQLI_ASSOC);
$final_id = $prod_id_result['product_id'];

$sql2 = "INSERT INTO category_item (category_id, product_id) VALUES ('$category', '$final_id')";

mysqli_query($connection, $sql2);