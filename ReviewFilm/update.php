<?php
include __DIR__."/../config/functionalDatabase.php";
$id=$_GET['id'];
$Content=$_POST['Content'];
$Date=$_POST['Date'];


editReviewFilm($id,$Content,$Date);
header("location:list.php");
exit();
?>