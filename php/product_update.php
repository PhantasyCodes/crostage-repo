<?php
require("connect.php");

$prod_name = $_POST['pname'];
$prod_desc = $_POST['pdescription'];
$prod_price = $_POST['price'];
$stock = $_POST['stock'];
$id = $_POST['id'];

echo $prod_name, $prod_desc, $prod_price, $stock, $id;

$sql = "UPDATE products SET product_name = $prod_name, product_description = $prod_desc, product_price = $prod_price, stock = $stock WHERE product_id = $id";
mysqli_query($connection, $sql);
mysqli_close($conn);
?>