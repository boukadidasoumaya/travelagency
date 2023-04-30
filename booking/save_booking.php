<?php
require('bdd.php');
require('booking_model.php');

$booking = new Booking(CBD::getInstance());

$booking->setTripDate($_POST['trip-date']);
$booking->setPrice($_POST['price']);
$booking->setUserId($_POST['user']);
$booking->setDestination($_POST['destination']);

$booking->createBooking();

header('Location:booking.php?booking=true');
