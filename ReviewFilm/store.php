<?php session_start();
include __DIR__."/../config/functionalDatabase.php";

$Content=$_POST['Content'];
$Date=date('y/m/d');
$UserId=$_SESSION['user']['user_id'];
$FilmId=$_GET['id'];

createReviewFilm($Content,$Date,$UserId,$FilmId);
header("location:../UserView/detail.php?id=".$FilmId);
exit();
?>