<?php
require('booking_model.php');

if (!isset($_SESSION)) {
    session_start();
}
$resultat = new Booking();

$id_reservation= htmlspecialchars($_GET['updatedid']);




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>update page</title>
  </head>
  <body>
  <div class=container>
    <form method="post" action="update_booking.php">
 
 <div class="form-group">
    <label for="destination">id</label>
    <input type="text" name="id" class="form-control" id="destination" placeholder="change destination" value="<?=$id_reservation?>">
  </div>
  <div class="form-group">
    <label for="destination">destination</label>
    <input type="text" name="destination" class="form-control" id="destination" placeholder="change destination">
  </div>
  <div class="form-group">
    <label for="date">date</label>
    <input type="date" name="date" class="form-control" id="date" placeholder="change trip date">
  </div>
  <div class="form-group">
    <label for="prix">price</label>
    <input type="text" name="prix" class="form-control" id="prix" placeholder="choose an other price">
  </div>
  <div class="form-group">
    <label for="name">First_name</label>
    <input type="text" name="first_name" class="form-control" id="name" placeholder="change name">
  </div>
  <div class="form-group">
    <label for="last_name">Last_name</label>
    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="change last_name">
  </div>
  <div class="form-group">
    <label for="Email">Email address</label>
    <input type="text" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Change email">

  </div>
  <button type="submit" class="btn btn-primary" href="update_booking.php">update</button>
</form>
</div>
   </body>
</html>