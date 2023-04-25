<?php
require('home_countries.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new home_countries();
header('Location: home.php');

$myfile = fopen("" . $_POST['countryname'] . ".php", "w");
sleep(1);
fwrite($myfile, $db->addcountry($_POST));
