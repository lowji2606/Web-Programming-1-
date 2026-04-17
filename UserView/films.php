<?php

session_start();
require __DIR__ . "/../config/functionalDatabase.php";
include __DIR__ . '/../middlewares/auth.php';

requiredLogin();
if (isset($_GET['Search']) && $_GET['Search'] !== '') {
    $NameFilm = $_GET['Search'];
    $films = searchFilm($NameFilm);
    
    ob_start();
    include __DIR__ . '/template/films.html.php';
    $content = ob_get_clean();
    include __DIR__ . '/../include/user/layout.html.php';
}
else{
$films = getallFilm();

ob_start();

include __DIR__ . '/template/films.html.php';
$content = ob_get_clean();

include __DIR__ . "/../include/user/layout.html.php";}
