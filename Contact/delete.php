<?php
include __DIR__.'/../config/functionalDatabase.php';
$id=$_GET['id'];
deleteContact($id);
header('location:List.php');
exit();
?>