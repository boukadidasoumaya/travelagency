<?php
require('Persistence.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new Persistence();
$id = htmlspecialchars($_POST['id']);
$db->delete($id);
$locate=$POST['countryname'];
header("location:$locate.php");