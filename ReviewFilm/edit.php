<?php 
include __DIR__.'/../config/functionalDatabase.php';
$id=$_GET['id'];
$review= getReviewbyid($id) ;
$films= getallFilm();
$Users= getallUser();
ob_start();
include __DIR__.'/templates/edit.html.php';
$content=ob_get_clean();
include __DIR__.'/../include/admin/layout.php';
?>