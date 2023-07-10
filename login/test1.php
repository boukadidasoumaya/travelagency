<?php


session_start();

if (isset($_SESSION['nbre'])) {
    $nbre = $_SESSION['nbre'];
    $_SESSION['nbre']++;
    $nbre++;
} else {
    $_SESSION['nbre'] = 1;
}
echo $_SESSION['nbre'];
var_dump($_COOKIE);
