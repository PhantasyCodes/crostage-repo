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

    require_once 'functions.php';

    if(emptyInputSignup($first_name, $last_name, $username, $number, $email, $password) !== false) {
        header("location: ../register.php?error=emptyinput");
        exit();
    }

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

    createUser($connection, $first_name, $last_name, $username, $number, $email, $password, $filename, $location);
}

else {
    header("location: ../register.php");
    exit();
}
