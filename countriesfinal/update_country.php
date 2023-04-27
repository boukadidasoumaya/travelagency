<?php
require('countries.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new countries();

$db->updatecountry($_POST);
header('Location: table_edit.php');
