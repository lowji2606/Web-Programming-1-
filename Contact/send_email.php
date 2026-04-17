<?php  
include __DIR__.'/../config/functionalDatabase.php';

$EmailFrom =$_POST['EmailFrom'];
$Content =$_POST['Content'];
$Date =date('y/m/d');
if (
    filter_var($EmailFrom,FILTER_VALIDATE_EMAIL)
    ) {createContact($EmailFrom,$Content,$Date);
        header('location:Email.php');
        exit();
    }
    else{ header('location:Email.php?error404=Wrong-Email!');
        exit();
    }
?>