<?php 
session_start();

if (!isset($_SESSION['user']) || (int)$_SESSION['user']['role'] !==1) {
    header('Location: ../auth/login.php');
    exit();
}
include __DIR__.'/../config/functionalDatabase.php';
$Users = getallUser();
$title = "User Management - Admin Dashboard";
ob_start();
include __DIR__.'/templates/list.html.php';
$content = ob_get_clean();
include __DIR__.'/../include/admin/layout.php'; 
?>