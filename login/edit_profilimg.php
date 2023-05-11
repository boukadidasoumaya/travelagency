<?php include_once('../countriesfinal/storeimg.php');
include_once('users.php');
$user=new users();
$im=new storeimg('images/');
$im->delete_photo_profil($_GET['id'] );
$user->update_img($_GET['id'],$_FILES["fileInput"]["name"]);


$im->storeim($_POST,"fileInput", $_GET['id'] );
var_dump($_FILES["fileInput"]['name']);
header("location:../login/profil.php?id=".$_GET['id']);
var_dump($_POST);

?>