<?php


require("../php/connect.php");

$sql = "SELECT * FROM users";

$result = mysqli_query($connection, $sql);

print_r($result);