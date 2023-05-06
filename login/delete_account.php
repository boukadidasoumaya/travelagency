<?php
require('users.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new users();
$id = htmlspecialchars($_GET['id']);
$db->delete_user($id);
header('Location: edit_accounts.php');
