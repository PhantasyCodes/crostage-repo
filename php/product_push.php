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

$prod_id = "SELECT product_id FROM products WHERE product_name = '$product_name'";
$prod_id_result = mysql_fetch_array($prod_id);
$final_id = $prod_id_result['prod_id'];

$sql2 = "INSERT INTO category_item (category_id, product_id) VALUES ('$category', '$final_id')";

mysqli_query($connection, $sql);
mysqli_query($connection, $sql2);