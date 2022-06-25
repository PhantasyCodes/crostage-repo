<?php

function emptyInputSignup($first_name, $last_name, $username, $number, $email, $password) {
    $result;
    if (empty($first_name) || empty($last_name) || empty($username) || empty($number) || empty($email) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

function takenUid($connection, $username, $email) {
    $result;
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $query = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($query, $sql)) {
        // header("location: ../register.php?error=queryfailed");
        exit();
    }

    mysqli_stmt_bind_param($query, "ss", $username, $email);
    mysqli_stmt_execute($query);

    $resultData = mysqli_stmt_get_result($query);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($query);
}

function createUser($connection, $first_name, $last_name, $username, $number, $email, $password, $filename, $location) {
    move_uploaded_file($_FILES['file']['tmp_name'], $location);
    $sql = "INSERT INTO users (first_name, last_name, username, profile_picture, phone_no, email, password, type) VALUES (?, ?, ?, ?, ?, ?, ?, 'user')";
    $query = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($query, $sql)) {
        header("location: ../register.php?error=queryfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($query, "sssssss", $first_name, $last_name, $username, $filename, $number, $email, $hashedPwd);
    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);
    header("location: ../signin.php?error=none");
    exit();

}

function emptyInputSignin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($connection, $username, $pwd) {
    $uidExists = takenUid($connection, $username, $username);

    if ($uidExists === false) {
        header("location: ../signin.php?error=invalidusername");
        exit();
    }

    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../signin.php?error=wrongpassword");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["user_id"];
        $_SESSION["useruid"] = $uidExists["username"];
        header("location: ../index.php");
        exit();
    }
}