<?php
include_once('booking_model.php');


if (!isset($_SESSION)) {
    session_start();
}
$resultat = new Booking();
$country_id = $_POST['country_id'];
$country_name = $_POST['destination'];


if ($_SESSION['user_name'] == 'admin') {
    $resultat->updateBooking($_POST['user_id'], $country_name, $country_id, $_POST);
    header('location:edit_bookingadmin.php');
} else {
    $resultat->updateBooking($_POST['user_id'], $country_name, 0,  $_POST);
    header('location:edit_booking.php?id=' . $_SESSION['user_id'] . '');
}