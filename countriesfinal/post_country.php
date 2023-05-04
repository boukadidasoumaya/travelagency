<?php
require('countries.php');
if (!isset($_SESSION)) {
    session_start();
}
//header('location:../home/home.php');

var_dump($_POST);
$db = new countries();
//var_dump($_FILES);
$im = new storeimg();
$im->storeim($_POST,"pic1");
$im->storeim($_POST,"pic2");
$im->storeim($_POST,"pic3");
$im->storeim($_POST,"hero_src");
$im->storeim($_POST,"cta_src");
$im->storeim($_POST,"services_src");
$im->storeim($_POST,"about_src");
$im->storeim($_POST,"contact_src");
$myfile = fopen("" . $_POST['countryname'] . ".php", "w");
sleep(1);
fwrite($myfile, $db->addcountry($_POST));
