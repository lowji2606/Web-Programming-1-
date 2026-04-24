<?php session_start();
include __DIR__."/../config/functionalDatabase.php";
include __DIR__.'/../middlewares/auth.php';
requiredLogin();
$Content=$_POST['Content'];
$Date=date('y/m/d');
$UserId=$_SESSION['user']['user_id'];



if ((int)$_SESSION['user']['role']===1) {
    $FilmId=$_POST['FilmId'];
    createReviewFilm($Content,$Date,$UserId,$FilmId);
    header('location:list.php');
    exit();
}


$FilmId=$_GET['id'];
createReviewFilm($Content,$Date,$UserId,$FilmId);
header("location:../UserView/detail.php?id=".$FilmId);
exit();
?>

