<?php
include __DIR__.'/../config/functionalDatabase.php';
$id=$_GET['id'];
deleteFilm($id);
header('location:list.php');
exit();
?>