<?php
session_start();
$isAuthenticated = false;
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
        $_SESSION['user'] = $_POST['username'];
        $isAuthenticated = true;
        header('Location:home.php');
    }
}
if (!$isAuthenticated)
    header('Location:login.php?error=Veuillez vérifiez vos credentials');
