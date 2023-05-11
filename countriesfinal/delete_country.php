<?php
require_once('countries.php');
require_once('storeimg.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new countries();
$id = htmlspecialchars($_GET['id']);
$dbimg= new storeimg('img/'.$id."/");
$dbimg->deleteimg($id);
$db->delete_country($id);

header('Location: table_edit.php');
