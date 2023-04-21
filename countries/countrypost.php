<?php
require('country.php');

$db = new country($_POST);
 
   header( 'Location: index.php' );
  

   $myfile=fopen("".$_POST['countryname'].".php","w");
   sleep(1);
fwrite($myfile, $db->addcountry());

?>