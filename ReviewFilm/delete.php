<?php
include __DIR__.'/../config/functionalDatabase.php';
$id=$_GET['id'];
deleteReviewFilm($id);
header('location:list.php');
exit();
?>