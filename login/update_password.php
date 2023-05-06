<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once 'users.php';
$user = new users();
if (isset($_POST['password'])) {


    $id = $_SESSION['id_mdp'];
    $user->motdepasse_oublie($id, $_POST['password']);
    header('Location: sign in.php');
} else {
    echo  "please enter password";
}
