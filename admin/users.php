<?php


require("../php/connect.php");

$sql = "SELECT user_id, username FROM users";

$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
print_r($result);
}
else {
echo "Failed";
}