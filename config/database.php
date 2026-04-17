<?php 
try {
    $pdo=new PDO ('mysql:host=localhost;dbname=Comp1841;charset=utf8', 'root','') ;
} catch (PDOException $th) {
    echo "that bai";
}
?>