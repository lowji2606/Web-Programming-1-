<?php
include __DIR__."/../config/functionalDatabase.php";
$Pass=$_POST['Pass'];
$UserName=$_POST['UserName'];
createUser($UserName,$Pass);
header("location:list.php");
exit();
?>