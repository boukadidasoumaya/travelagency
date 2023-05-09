<?php
require_once('countries.php');
if (!isset($_SESSION)) {
    session_start();
}
header('location:../home/home.php');

$db = new countries();
$im = new storeimg('img/');
$im->storeim($_POST,"imgfolder");
$im->storeim($_POST,"pic1");
$im->storeim($_POST,"pic2");
$im->storeim($_POST,"pic3");
$im->storeim($_POST,"hero_src");
$im->storeim($_POST,"cta_src");
$im->storeim($_POST,"services_src");
$im->storeim($_POST,"about_src");
$im->storeim($_POST,"contact_src");
//$myfile = fopen("" . $_POST['countryname'] . ".php", "w");
//sleep(1);
 $db->addcountry($_POST);
