<form action='test.php' methode='post'>
<input type="file" name='img'>
<html>
<?php
require('bdd.php');

$cnx=CBD::getInstance();
$rjk=array();
$query = "select * from `country` where country_id=6";

$response = $cnx->prepare($query);
$response->execute([]);
$countries = $response->fetchAll(\PDO::FETCH_ASSOC);
foreach ($countries as $c ){


echo ($c["country_name"]) ;
}?>

</html> 