<?php
include __DIR__."/../config/functionalDatabase.php";

$id=$_GET['id'];
$UserName=$_POST['UserName'];
editUser($UserName,$id);

header("location:list.php");
exit();

?>