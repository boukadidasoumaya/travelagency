<?php

if (!isset($_SESSION)) {
  session_start();
}
/* if (isset($_SESSION)) {
  if (isset($_SESSION['error_mail'])) {

    header('Location:../login/motdepasse_oublie.php');
  }
}
 */



$numbers = array();
for ($i = 0; $i < 8; $i++) {
  $numbers[] = mt_rand(0, 9);
}
$code = implode('', $numbers);
$_SESSION['code'] = $code;

include_once 'users.php';
$user = new users();
if (isset($_POST['email'])) {
  if ($user->verify_accountByemail_motdepasse_oublie($_POST['email'])) {

    $id = $user->find_user_by_email($_POST['email']);
    $_SESSION['id_mdp'] = $id;
    $url = "http://localhost:3000/login/reset_password.php?id=$id";
    $message = "Hello! this is the code for resetting your password: $code";
    $headers = "From: think.travel.agency.project@gmail.com\r\n";
    $headers .= "Reply-To: think.travel.agency.project@gmail.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    if (mail($_POST['email'], "Password forgotten", $message, $headers)) {
      $_SESSION['mail'] = 'Mail Sent';
      unset($_SESSION['error_msg']);
      header('Location:../login/verify_code.php');
    } else {
      echo "error";
      header('Location:../login/motdepasse_oublie.php');
    }
  } else {
    $_SESSION['error_msg'] = "This email does not exist";
    header('Location:../login/motdepasse_oublie.php');
  }
} else {
  $_SESSION['error_msg'] =  "Please enter un email";
  header('Location:../login/motdepasse_oublie.php');
}
