<?php 
include __DIR__.'/../config/functionalDatabase.php';
$films= getallFilm();
$Users= getallUser();
ob_start();
include __DIR__.'/templates/add.html.php';
$content=ob_get_clean();
include __DIR__.'/../include/admin/layout.php';
?>