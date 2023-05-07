<?php
require('booking_model.php');

//access deletedid from the url of the page:start:
if (!isset($_SESSION)) {
    session_start();
}
$resultat = new Booking();
/*$id_reservation= htmlspecialchars($_GET['updatedid']);*/

$resultat->updateBooking($_POST);

//header to refresh the page after deleting the trip.
header('location:edit_booking.php?edit_id='.$_POST['id'].'');



  ?>