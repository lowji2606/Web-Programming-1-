<?php 
$error404='';
if ($_GET['error404']){
    $error404=$_GET['error404'];
}
ob_start();
include __DIR__.'/template/Email.html.php';
$content= ob_get_clean();
include __DIR__.'/../include/user/layout.html.php';
?>