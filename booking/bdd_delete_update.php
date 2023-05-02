<!--establish connection to the database 'clients'-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clients";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
