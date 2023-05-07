<?php
require('booking_model.php');


if (!isset($_SESSION)) {
    session_start();
}
$resultat = new Booking();
$resultat->updateBooking($_POST);
header('location:edit_booking.php?id='.$_SESSION['user_id'].'');
