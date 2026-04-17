<?php
include __DIR__.'/../config/functionalDatabase.php';
$id=$_GET['id'];
deleteUser($id);
header('location:list.php');
exit();
?>