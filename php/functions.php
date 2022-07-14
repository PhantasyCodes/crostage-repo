<?php

function emptyInputSignup($first_name, $last_name, $username, $number, $email, $password) {
    $result = null;
    if (empty($first_name) || empty($last_name) || empty($username) || empty($number) || empty($email) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result = null;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result = null;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

function takenUid($connection, $username, $email) {
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $query = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($query, $sql)) {
        header("location: ../register.php?error=queryfailed");
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

    // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($query, "sssssss", $first_name, $last_name, $username, $filename, $number, $email, $password);
    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);
    header("location: ../signin.php?error=none");
    exit();
}

function editUser($connection, $first_name, $last_name, $username, $number, $email, $password, $filename, $location, $sesh_id) {
    move_uploaded_file($_FILES['file']['tmp_name'], $location);
    $sql = "UPDATE users SET first_name = 'davidking', last_name = case when $last_name is null then last_name else $last_name, username = case when $username is null then username else $username, number = case when $number is null then number else $number, email = case when $email is null then email else $email, password = case when $password is null then password else $password, profile_picture =  case when $filename is null then profile_picture else $filename WHERE user_id = '3'";
    mysqli_query($connection, $sql);
    header("location: ../user.php?error=none");
    exit();
}

function emptyInputSignin($username, $pwd) {
    $result = null;
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
    $pwdRight = $uidExists["password"];

    if ($pwd !== $pwdRight) {
        header("location: ../signin.php?error=wrongpassword");
        exit();
    }
    else if ($pwd === $pwdRight) {
        session_start();
        $_SESSION["userid"] = $uidExists["user_id"];
        $_SESSION["useruid"] = $uidExists["username"];
        header("location: ../index.php");
        exit();
    }
}