<?php
require('countries.php');
if (!isset($_SESSION)) {
    session_start();
}
header('location:../home/home.php');

$db = new countries();
$im = new storeimg();
$target="/img/countries";
$im->storeim($_POST,"pic1",$target);
$im->storeim($_POST,"pic2",$target);
$im->storeim($_POST,"pic3",$target);
$im->storeim($_POST,"hero_src",$target);
$im->storeim($_POST,"cta_src",$target);
$im->storeim($_POST,"services_src",$target);
$im->storeim($_POST,"about_src",$target);
$im->storeim($_POST,"contact_src",$target);
//$myfile = fopen("" . $_POST['countryname'] . ".php", "w");
//sleep(1);
 $db->addcountry($_POST);
