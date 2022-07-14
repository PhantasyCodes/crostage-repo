<?php

require("connect.php");

$product_id = $_POST["prodid"];

$sql = "DELETE FROM products WHERE product_id = '$product_id';";

mysqli_query($connection, $sql);
mysqli_close($connection);