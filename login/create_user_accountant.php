<?php

require_once('users.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new users();
    $user->create($_POST);
    exit;
}
?>

