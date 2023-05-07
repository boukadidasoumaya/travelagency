
<?php
require('booking_model.php');


if (!isset($_SESSION)) {
    session_start();
}
$resultat = new Booking();
$id_reservation = htmlspecialchars($_GET['deletedid']);

$resultat->deleteBooking($id_reservation);


header('location:edit_bookingadmin.php');



?>