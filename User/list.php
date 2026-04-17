<?php 
session_start();

if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header('Location: ../auth/login.php');
    exit();
}
include __DIR__.'/../config/functionalDatabase.php';
$Users = getallUser();
$title = "User Management - Admin Dashboard";
ob_start();
include __DIR__.'/templates/list.html.php';
$content = ob_get_clean();
include __DIR__.'/../admin/dashboard.php'; 
?>