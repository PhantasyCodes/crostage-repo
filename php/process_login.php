<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    require_once 'connect.php';
    require_once 'functions.php';

    if(emptyInputSignin($username, $pwd) !== false) {
        header("location: ../signin.php?error=emptyinput");
        exit();
    }

    loginUser($connection, $username, $pwd);
}

else {
    header("location: ../signin.php");
    exit();
}