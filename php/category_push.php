<?php

require("connect.php");

// print_r($_POST);
$category_name = $_POST["cname"];
$description = $_POST["cdescription"];
$filename = $_FILES['file']['name'];

$location = "../images/".$filename;

if( move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
    echo 'File uploaded succesfully';
}

$sql = "INSERT INTO categories (category_name, category_description, category_img) 
VALUES ('$category_name', '$description', '$filename')";

mysqli_query($connection, $sql);