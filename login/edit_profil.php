<?php
require('users.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new users();
$id = $_GET['id'];

$db->update_userprofil($id, $_POST);
if ($_SESSION['user_name']=='admin'){
header('Location: edit_accounts.php');
}
else
header('Location: profil.php?id=' . $id . '');
