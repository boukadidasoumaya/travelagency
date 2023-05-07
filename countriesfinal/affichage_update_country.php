<?php
require('countries.php');
$db = new countries();

$country_selected = $db->findById($_GET['id']);

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
        <form action="update_country.php" method="post" role="form">

            <div class="form-group">
                <label for="destination">ID</label>
                <input id="country_id" class="form-control" name="country_id" value='<?= $country_selected['country_id'] ?>'>
            </div>
            <div class="form-group">
                <label for="date">Country Name</label>
                <input id="countryname" class="form-control" name="countryname" value='<?= $country_selected['country_name'] ?>'>
            </div>

            <div class="form-group">
                <label for="name">Climate</label>
                <textarea id="climate" class="form-control" name="climate" cols="40" rows="10"><?= $country_selected['climate'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="last_name">Currency</label>
                <textarea id="currency" class="form-control" name="currency" cols="40" rows="10"><?= $country_selected['currency'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="Email">History</label>
                <textarea id="history" class="form-control" name="history" cols="40" rows="10"><?= $country_selected['history'] ?></textarea>

            </div>
            <div class="form-group">
                <label for="Email">Price car</label>
                <input id="price_car" class="form-control" name="price_car" value='<?= $country_selected['price_car'] ?>'>

            </div>
            <div class="form-group">
                <label for="Email">Price trip</label>
                <input id="pricetrip" class="form-control" name="pricetrip" value='<?= $country_selected['price_trip'] ?>'>

            </div>
            <div class="form-group">
                <label for="Email">Price tour guide</label>
                <input id="pricetg" class="form-control" name="pricetg" value='<?= $country_selected['price_tour_guide'] ?>'>

            </div>
            <div class="form-group">
                <label for="Email">Photo for home</label>
                <input id="imgfolder" class="form-control" name="imgfolder" value='<?= $country_selected['photo_for_home'] ?>'>
            </div>
            <span> <a href='..\home\home.php'>
                    <button class="btn ">Back to Home</button></a></span><button type="submit" class="btn btn-primary" href="update_booking.php?updatedid=<?= $id_reservation ?>">Edit</button>
        </form>
    </div>
</body>

</html>