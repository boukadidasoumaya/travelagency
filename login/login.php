<?php
session_start();

$isAuthenticated = false;
include_once 'users.php';
$credentiel = $_POST['credentiel'];
$user = new users();
if (filter_var($credentiel, FILTER_VALIDATE_EMAIL)) {
    $user = $user->verify_accountByemail($_POST['credentiel'], $_POST['password']);
} else {
    $user = $user->verify_accountByname($_POST['credentiel'], $_POST['password']);
}

$_SESSION['admin'] = false;
if (($user)) {
    if (($_POST['credentiel'] == 'admin' || 'admin@gmail.com') && $_POST['password'] == 'admin') {
        $_SESSION['user_name'] = 'admin';

        $_SESSION['admin'] = true;
        $_SESSION['isAuthenticated'] = true;
        $isAuthenticated = true;
        echo 'i am here';
        header('Location:../home/home.php');
    } else {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['isAuthenticated'] = true;
        $_SESSION['admin'] = false;
        $isAuthenticated = true;
        var_dump($_SESSION);
        header('Location:login.php');
        echo 'else here';
    }
} else {
    $_SESSION['error'] = "veuillez verifier vos credentiels";
    $_SESSION['admin'] = false;
    header('Location:sign in.php?');
}
