<?php

session_start();

if (empty($_SESSION["user"])) {
    header('location: auth/login.php');
    exit();
} else {
    var_dump($_SESSION["user"]);
    if ((int)$_SESSION["user"]["role"] === 0) {
        header('location: UserView/films.php');
        exit();
    } elseif ((int)$_SESSION["user"]["role"] === 1) {
        header('location: FIlm/list.php');
        exit();
    }
}
