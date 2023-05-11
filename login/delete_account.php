<?php
require('users.php');
if (!isset($_SESSION)) {
    session_start();
}
include_once('../countriesfinal/storeimg.php');
include_once('../countriesfinal/comment.php');
$com=new Persistence();
$com->delete_user_comment($_GET['id'] );


$im=new storeimg('images/');
$im->delete_photo_profil($_GET['id'] );
$db = new users();
$id = htmlspecialchars($_GET['id']);
$db->delete_user($id);
header('Location: edit_accounts.php');
