<?php
require('countries.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new countries();
header('Location: ../home/home.php');

$myfile = fopen("" . $_POST['countryname'] . ".php", "w");
sleep(1);
fwrite($myfile, $db->addcountry($_POST));
