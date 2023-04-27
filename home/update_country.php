<?php
require('home_countries.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new home_countries();

$db->updatecountry($_POST);
header('Location: table_edit.php');
