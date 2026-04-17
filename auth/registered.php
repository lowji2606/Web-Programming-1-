<?php
session_start();
require __DIR__ . "/../config/functionalDatabase.php";
include __DIR__ . "/../middlewares/auth.php";

if (!empty($_SESSION["user"]) && $_SESSION["user"]) {
    header('location: ../index.php');
    exit();
}
try {
    
    $username = $_POST["UserName"];
    $password = $_POST["Pass"];
    $password_str=strlen($password);
    if (
        $password_str< 3
    ) {
        header('location:register.php?error404=As-less-3-letter!');
        exit();
    }
    if (
        empty($username) ||
        empty($password)
    ) {
        header('location:register.php?error404=Username-And-Passwords-Require!');
        exit();
    }
    createUser($username, $password);
    header('location: login.php');
    exit();
} catch (Error $e) {
    echo $e->getMessage();
}
