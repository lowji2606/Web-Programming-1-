<?php
include __DIR__ . "/../config/functionalDatabase.php";

$NameFilm = $_POST['NameFilm'];
$DateFilm = $_POST['DateFilm'];
$image = '';

if(isset($_FILES["image"]) ) {
    $fileTmpPath = $_FILES["image"]["tmp_name"];
    $fileName = $_FILES["image"]["name"];

    $newFileName = time() . "_" . $fileName;
    $uploadFileDir = __DIR__."/../uploads/";
    $dest_path = $uploadFileDir . $newFileName;

    if(move_uploaded_file($fileTmpPath,$dest_path)) {
        $image = $newFileName;
    }
}

createFilm($NameFilm, $DateFilm, $image);


header("location:list.php"); 
exit();
?>