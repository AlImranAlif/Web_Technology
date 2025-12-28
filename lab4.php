<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $_SESSION['usernameErrMsg'] = "";
    $_SESSION['passwordErrMsg'] = "";
    $_SESSION['username'] = "";

    $username = $_POST['uname'];
    $password = $_POST['password'];
    $isValid = true;

    if (empty($username)) {
        $_SESSION['usernameErrMsg'] = "Username is required";
        $isValid = false;
    } else {
        $_SESSION['username'] = $username;
    }

    if (empty($password)) {
        $_SESSION['passwordErrMsg'] = "Password is required";
        $isValid = false;
    }

    if ($isValid) {
        $_SESSION['isLoggedIn'] = true;
        header("Location: lab2.php");
    } else {
        header("Location: lab1.php");
    }
}
