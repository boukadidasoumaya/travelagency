<?php
require('home_countries.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new home_countries();
$id = htmlspecialchars($_GET['id']);
$db->delete_country($_GET['id']);
header('Location: home.php');
