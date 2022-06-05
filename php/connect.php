<?php

$server_name = "localhost";
$username = "crostage_admin";
$password = "D@v1dK1ng";
$database="crostage_db";

$connection = mysqli_connect($server_name, $username, $password, $database);

// if (!$connection) {
//     die("Failed".mysqli_connect_error());
// }else {
//     echo "Connected Successfully";
// }

?>