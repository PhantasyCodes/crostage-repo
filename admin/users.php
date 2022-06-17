<?php


require("../php/connect.php");

$sql = "SELECT user_id, username FROM users";

$query = mysqli_query($connection, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);

print_r($query);