<?php 


include __DIR__.'/../config/functionalDatabase.php';
$reviews =getallReviewFilm1();
ob_start();
include __DIR__.'/templates/list.html.php';
$content=ob_get_clean();
include __DIR__.'/../include/admin/layout.php';
?>