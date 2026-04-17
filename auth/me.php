<?php

session_start();

require __DIR__ . "/../config/functionalDatabase.php";

if (!empty($_SESSION["user"]) && $_SESSION["user"]) {
    header('location: ../index.php');
    exit();
}

try {

    $username = $_POST["UserName"];
    $password = $_POST["Pass"];

    if (empty($username) || empty($password)) throw new Error("username and password is required");

    $user = gehtUserbyUserName($username);

    if (empty($user)) throw new Error("User not found");

    if ($password !== $user["Pass"]) {
        header('location:login.php?error404=Something-Wrong-!');
        exit();        
    }
    $_SESSION["user"] = [
        "user_id" => $user["Id"],
        "username" => $user["UserName"],
        "role" => $user["Role"]
    ];

    header('location: ../index.php');
    exit();
} catch (Error $e) {
    echo $e->getMessage();
}
