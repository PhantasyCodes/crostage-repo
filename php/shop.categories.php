<?php
require("php/connect.php");
if(isset($_POST["choice"])) {
    $choice = $_POST["choice"];
    $sql = "SELECT products.product_id, categories.category_name FROM products INNER JOIN category_item ON products.product_id = category_item.product_id INNER JOIN categories ON categories.category_id = category_item.category_id  WHERE categories.category_name = '$category';";
    mysqli_query($connection, $sql);
    mysqli_close($conn);
    header("location: shop.php?category='$choice'");
    exit();
    
}