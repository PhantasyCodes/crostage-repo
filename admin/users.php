<?php


require("../php/connect.php");

$sql = "SELECT * FROM users";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      print_r($row);
    }
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);