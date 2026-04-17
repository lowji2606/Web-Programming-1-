<?php 
include __DIR__.'/../config/functionalDatabase.php';

$Contacts =getallContact();
ob_start();
include __DIR__.'/template/List.html.php';
$content= ob_get_clean();
if (!empty($_SESSION['User']) && $_SESSION['User']['Role']==0){
    include __DIR__.'/../include/layoutUser.php';

}
else{
    include __DIR__.'/../include/admin/layout.php';
}
?>