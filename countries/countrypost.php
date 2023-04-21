<?php
require('country.php');
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

$db = new country($_POST);
 echo $db->tellme();
   header( 'Location: index.php' );
  
 $myfile=fopen("".$_POST['countryname'].".php","w");
   sleep(1);
fwrite($myfile, $db->addcountry());

?>