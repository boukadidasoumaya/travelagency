<?php
require('users.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new users();
$id = $_GET['id'];

$db->update_userprofil($_GET['id'], $_POST);

header('Location: profil.php?id='. $id .'');
