<?php
require('home_countries.php');
$db = new home_countries();

$country_selected = $db->findById($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <form action="update_country.php" method="post" role="form">

        <div class="container my-4">

            <table class="table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>Expectation</th>
                        <th>Population</th>
                        <th>Climate</th>
                        <th>Currency</th>
                        <th>History</th>
                        <th>Price car</th>
                        <th>Price trip</th>
                        <th>Price tour guide</th>
                        <th>Photo for home</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><input id="country_id" name="country_id" value='<?= $country_selected['country_id'] ?>'></td>
                        <td><input id="countryname" name="countryname" value='<?= $country_selected['country_name'] ?>'></td>
                        <td><textarea id="expectation" name="expectation" cols="40" rows="10"><?= $country_selected['expectation'] ?></textarea></td>
                        <td><textarea id="population" name="population" cols="40" rows="10"><?= $country_selected['population'] ?></textarea></td>
                        <td><textarea id="climate" name="climate" cols="40" rows="10"><?= $country_selected['climate'] ?></textarea></td>
                        <td><textarea id="currency" name="currency" cols="40" rows="10"><?= $country_selected['currency'] ?></textarea></td>
                        <td><textarea id="history" name="history" cols="40" rows="10"><?= $country_selected['history'] ?></textarea></td>
                        <td><input id="price_car" name="price_car" value='<?= $country_selected['price_car'] ?>'></td>
                        <td><input id="pricetg" name="pricetg" value='<?= $country_selected['price_tour_guide'] ?>'></td>
                        <td><input id="pricetrip" name="pricetrip" value='<?= $country_selected['price_trip'] ?>'></td>
                        <td><input id="imgfolder" name="imgfolder" value='<?= $country_selected['photo_for_home'] ?>'></td>

                        <td>
                            <button type='submit' class='btn btn-success'>Edit</button>
                        </td>
                    </tr>


                </tbody>

            </table>

        </div>
    </form>
</body>

</html>