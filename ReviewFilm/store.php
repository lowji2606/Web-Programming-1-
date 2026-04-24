<?php session_start();
include __DIR__."/../config/functionalDatabase.php";
include __DIR__.'/../middlewares/auth.php';
requiredLogin();
$Content=$_POST['Content'];
$Date=date('y/m/d');
$UserId=$_SESSION['user']['user_id'];
$FilmId=$_POST['FilmId'];

if ((int)$_SESSION['user']['role']===1) {
    createReviewFilm($Content,$Date,$UserId,$FilmId);
    header('location:list.php');
    exit();
}



createReviewFilm($Content,$Date,$UserId,$FilmId);
header("location:../UserView/detail.php?id=".$FilmId);
exit();
?>

