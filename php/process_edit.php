<?php

if (isset($_POST["submit"])) {
    require("connect.php");

    if(!empty($_POST['firstname'])) {
        $first_name = null;
    }
    else {
        $first_name = $_POST["firstname"];
    }
    if(!empty($_POST['lastname'])) {
        $last_name = null;
    }
    else {
        $last_name = $_POST["lastname"];
    }
    if(!empty($_POST['username'])) {
        $username = null;
    }
    else {
        $username = $_POST["username"];
    }
    if(!empty($_POST['number'])) {
        $number = null;
    }
    else {
        $number = $_POST["number"];
    }
    if(!empty($_POST['email'])) {
        $email = null;
    }
    else {
        $email = $_POST["email"];
    }
    if(!empty($_POST['password'])) {
        $password = null;
    }
    else {
        $password = $_POST["password"];
    }
    $filename = null;
    $location = null;
    $sesh_id = $_POST["id"];

    require_once 'functions.php';

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
