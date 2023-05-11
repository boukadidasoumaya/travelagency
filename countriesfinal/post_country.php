<?php
require_once('countries.php');
if (!isset($_SESSION)) {
    session_start();
}
header('location:../home/home.php');
mkdir("img/".$_POST['country_id']."/");
$db = new countries();
$im = new storeimg("img/".$_POST['country_id']."/");
var_dump($_POST['country_id']);
$im->storeim($_POST,"imgfolder",$_POST['countryname']);
$im->storeim($_POST,"pic1",$_POST['countryname']);
$im->storeim($_POST,"pic2",$_POST['countryname']);
$im->storeim($_POST,"pic3",$_POST['countryname']);
$im->storeim($_POST,"hero_src",$_POST['countryname']);
$im->storeim($_POST,"cta_src",$_POST['countryname']);
$im->storeim($_POST,"services_src",$_POST['countryname']);
$im->storeim($_POST,"about_src",$_POST['countryname']);
$im->storeim($_POST,"contact_src",$_POST['countryname']);

 $db->addcountry($_POST);
