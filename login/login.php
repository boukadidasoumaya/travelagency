<?php

if (!isset($_SESSION)) {
    session_start();
}

$isAuthenticated = false;
include_once 'users.php';
$credentiel = $_POST['credentiel'];
$user = new users();
if (filter_var($credentiel, FILTER_VALIDATE_EMAIL)) {
    $user = $user->verify_accountByemail($_POST['credentiel']);
} else {
    $user = $user->verify_accountByname($_POST['credentiel']);
}


if (($user) && password_verify($_POST['password'], $user['password']))  {
    if (($_POST['credentiel'] == 'admin' || 'admin@gmail.com') && ($_POST['password'] == 'admin')) {
        $_SESSION['user_name'] = 'admin';
        $_SESSION['user_id'] = $user['user_id'];
    ;
        ;


        $_SESSION['isAuthenticated'] = true;
        $isAuthenticated = true;
        echo 'i am here';
        header('Location:../home/home.php');
    } else {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['isAuthenticated'] = true;
     

        $isAuthenticated = true;

        header('Location:../home/home.php');
        echo 'else here';
    }
} else {
    $_SESSION['error'] = "veuillez verifier vos credentiels";

    header('Location:sign in.php');
}
