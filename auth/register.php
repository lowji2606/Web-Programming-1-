<?php
session_start();

require __DIR__ . "/../config/functionalDatabase.php";
$error404='';
if ($_GET['error404']){
    $error404=$_GET['error404'];
}

if (!empty($_SESSION["user"]) && $_SESSION["user"]) {
    header('location: ../index.php');
    exit();
}

ob_start();
include __DIR__ . "/templates/register.html.php";
$content = ob_get_clean();

include __DIR__ . "/../include/user/layout.html.php";
