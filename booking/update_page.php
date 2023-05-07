<?php
require('booking_model.php');

if (!isset($_SESSION)) {
  session_start();
}
$resultat = new Booking();

$id_reservation = htmlspecialchars($_GET['updatedid']);
$res = $resultat->get_reservation_byone($id_reservation);



?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <title>update page</title>
</head>

<body>
  <div class=container>
    <form method="post" action="update_booking.php">

      <div class="form-group">
        <label for="destination">id</label>
        <input type="text" name="id" class="form-control" id="destination" placeholder="change destination" value="<?= $res['id_reservation'] ?>">
      </div>
      <div class="form-group">
        <label for="name">First_name</label>
        <input type="text" value="<?= $res['user_name'] ?>" name="first_name" class="form-control" id="name" placeholder="change name">
      </div>
      <div class="form-group">
        <label for="last_name">Last_name</label>
        <input type="text" class="form-control" value="<?= $res['user_last_name'] ?>" name="last_name" class="form-control" id="last_name" placeholder="change last_name">
      </div>
      <div class="form-group">
        <label for="destination">Destination</label>
        <input type="text" class="form-control" name="destination" class="form-control" value="<?= $res['country_name'] ?>" id="destination" placeholder="change destination">
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" name="date" value="<?= $res['date'] ?>" class="form-control" id="date" placeholder="change trip date">
      </div>


      <div class="form-group">
        <label for="Email">Email address</label>
        <input type="text" class="form-control" value="<?= $res['email'] ?>" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Change email">

      </div>

      <button type="submit" class="btn btn-primary" href="update_booking.php">update</button>
    </form>
  </div>
</body>

</html>