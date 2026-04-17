<?php
include __DIR__.'/../config/functionalDatabase.php';
$id=$_GET['id'];
deleteWishlist($id);
header('location:list.php');
exit();
?>