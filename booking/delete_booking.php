
<?php
require('booking_model.php');


if (!isset($_SESSION)) {
  session_start();
}
$resultat = new Booking();
/* $id_reservation = htmlspecialchars($_GET['deletedid']); */

$resultat->deleteBooking($_GET['deletedid']);
if ($_SESSION['user_name'] == 'admin') {
  header('location:edit_bookingadmin.php');
} else {
  header('location:edit_booking.php');
}



?>