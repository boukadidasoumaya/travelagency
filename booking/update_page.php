<?php
include_once('booking_model.php');

if (!isset($_SESSION)) {
  session_start();
}
$resultat = new Booking();
$countries = new Booking();
$id_reservation = htmlspecialchars($_GET['updatedid']);
$res = $resultat->get_reservation_byone($id_reservation);
$countries = $countries->get_countries();


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
        <input type="hidden" name="id" value="<?= $res['id_reservation'] ?>">
        <input type="number" class="form-control" id="destination" placeholder="change destination" value="<?= $res['id_reservation'] ?>" disabled>
      </div>
      <div class="form-group">
        <label for="name">First_name</label>
        <input type="hidden" name="user_id" class="form-control" id="destination" placeholder="change destination" value="<?= $res['user_id'] ?>">

        <input type="text" value="<?= $res['user_name'] ?>" name="first_name" class="form-control" disabled>
      </div>
      <div class="form-group">
        <label for="last_name">Last_name</label>
        <input type="text" class="form-control" value="<?= $res['user_last_name'] ?>" name="last_name" class="form-control" disabled>
      </div>
      <?php if ($_SESSION['user_name'] == 'admin') {
      ?>
        <div class="form-group">
          <label for="Email">Email address</label>
          <input type="text" class="form-control" value="<?= $res['email'] ?>" name="email" class="form-control" id="Email" aria-describedby="emailHelp" disabled>

        </div>
      <?php  } else {  ?> <div class="form-group">
          <label for="Email">Email address</label>
          <input type="text" class="form-control" value="<?= $res['email'] ?>" name="email" class="form-control" id="Email" aria-describedby="emailHelp">

        </div>
      <?php } ?>


      <?php if ($_SESSION['user_name'] == 'admin') {
      ?>
        <div class="form-group">
          <input type="hidden" name="country_id" class="form-control" id="destination" placeholder="change destination" value="<?= $res['destination'] ?>">
          <input type="hidden" name="country_name" class="form-control" id="destination_name" placeholder="change destination" value="<?= $res['destination_name'] ?>">
          <label for="destination">Destination</label>
          <select name="destination" class="form-control">
            <option value="<?= $res['destination_name'] ?>"><?= $res['destination_name'] ?></option>
            <?php foreach ($countries as $c) : ?>
              <option value="<?= $c['country_name'] ?>"><?= $c['country_name'] ?> </option>
            <?php endforeach ?>
          </select>
        </div>
      <?php  } else {  ?> <div class="form-group">
          <label for="destination">Destination</label>
          <input type="hidden" name="country_id" class="form-control" id="destination" placeholder="change destination" value="<?= $res['destination'] ?>">
          <input type="hidden" name="country_name" class="form-control" id="destination_name" placeholder="change destination" value="<?= $res['destination_name'] ?>">
          <input type="text" class="form-control" name="destination" class="form-control" value="<?= $res['destination_name']  ?>" disabled>
        </div>
      <?php } ?>

      <?php if ($_SESSION['user_name'] == 'admin') {
      ?>
        <div class="form-group">
          <label for="price">Price Trip</label>
          <input type="number" class="form-control" name="price" value="<?= $res['prix'] ?>" class="form-control" id="date" placeholder="change trip date">
        </div>
      <?php  } ?>



      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" name="date" value="<?= $res['date'] ?>" class="form-control" id="date" placeholder="change trip date">
      </div>
      <?php if ($_SESSION['user_name'] != 'admin') {
      ?>
       <div class="form-group">
        
        <label for="Passwport">PASSPORT</label>
        <input type="text" class="form-control" name="passport" value="<?= $res['num_passport'] ?>">
      </div>
      <?php  } ?>
      




      <button type="submit" class="btn btn-primary" href="">update</button>
    </form>
  </div>
</body>

</html>