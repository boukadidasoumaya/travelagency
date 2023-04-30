<?php
require('users.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new users();

$db->update_user($_POST);
header('Location: edit_accounts.php');