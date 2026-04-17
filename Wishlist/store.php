<?php 
session_start();
include __DIR__.'/../config/functionalDatabase.php';
$filmId=$_GET['FilmId'];
createWishlist($filmId);
header('location:../UserView/films.php');
exit();
?>