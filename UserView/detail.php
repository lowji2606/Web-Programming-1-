<?php

session_start();
require __DIR__ . "/../config/functionalDatabase.php";
include __DIR__ . '/../middlewares/auth.php';

requiredLogin();
$id = $_GET["id"];
$film = getFilmbyid($id);
$reviews =getallReviewFilm1();
ob_start();

include __DIR__ . '/template/detail.html.php';
$content = ob_get_clean();

include __DIR__ . "/../include/user/layout.html.php";
