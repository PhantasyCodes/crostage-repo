<?php

require("connect.php");

$product_id = $_POST["prodid"];
echo $product_id;

$sql = "UPDATE products SET is_active = 'no' WHERE product_id = '$product_id';";

mysqli_query($connection, $sql);
mysqli_close($connection);