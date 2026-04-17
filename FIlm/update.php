<?php
include __DIR__."/../config/functionalDatabase.php";
$id=$_GET['id'];
$NameFilm=$_POST['NameFilm'];
$DateFilm=$_POST['DateFilm'];
$image=$_POST['old_image'];
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $FILES['image']['name'];

        $newFileName = time() . '' . $fileName;

        $uploadFileDir = __DIR__ . '/../uploads/';
        $dest_path = $uploadFileDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $image = $newFileName;
        }
    }
editFilm($id,$NameFilm,$DateFilm,$image);
header("location:list.php");
exit();
?>