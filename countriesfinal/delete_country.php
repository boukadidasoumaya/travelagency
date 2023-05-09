<?php
require_once('countries.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new countries();
$id = htmlspecialchars($_GET['id']);
$db->delete_country($id);
header('Location: table_edit.php');
