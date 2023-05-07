<?php

require_once('users.php');
if (!isset($_SESSION)) {
    session_start();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new users();
    $email = $_POST['email'];
    $query = "SELECT * FROM `user` WHERE email = ?";
    $response = $user->getCnx()->prepare($query);
    $response->execute([$email]);
    $result = $response->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $_SESSION['error_code'] = 'Account already exists';
        header('Location:../login/signup.php');
        exit;
    } else {
        $user->create($_POST);
        exit;
    }
}
?>


