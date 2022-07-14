<?php

if (isset($_POST["submit"])) {
    require("connect.php");

    // print_r($_POST);


    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastname"];
    $username = $_POST["username"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $filename = $_FILES['file']['name'];
    $location = "../images/".$filename;
    $sesh_id = $_POST["id"];

    require_once 'functions.php';

    if(invalidUid($username) !== false) {
        header("location: ../register.php?error=invaliduid");
        exit();
    }

    if(invalidEmail($email) !== false) {
        header("location: ../register.php?error=invalidemail");
        exit();
    }

    if(takenUid($connection, $username, $email) !== false) {
        header("location: ../register.php?error=takenuid");
        exit();
    }

    editUser($connection, $first_name, $last_name, $username, $number, $email, $password, $filename, $location, $sesh_id);
}

else {
    header("location: ../index.php");
    exit();
}
