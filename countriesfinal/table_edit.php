<?php
require('countries.php');
$db = new countries();
$countries = $db->get_countries();

include_once '../fragments/barrehead.php';
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
    <!--?php
  include_once '../fragments/barre.php';
  ?-->
    <div class="container my-4">
        <table class="table  table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
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
                <?php

                foreach ($countries as $c) :
                ?>
                    <tr>
                        <th><?= $c['country_id'] ?></th>
                        <td><?= $c['country_name'] ?></td>
                        <td><?= $c['population'] ?></td>
                        <td><?= $c['climate'] ?></td>
                        <td><?= $c['currency'] ?></td>
                        <td><?= $c['history'] ?></td>
                        <td><?= $c['price_car'] ?></td>
                        <td><?= $c['price_trip'] ?></td>
                        <td><?= $c['price_tour_guide'] ?></td>
                        <td><?= $c['photo_for_home'] ?></td>

                        <td>
                            <a class='btn btn-success' href='affichage_update_country.php?id=<?= $c['country_id'] ?>'>Edit</a>
                            <a class='btn btn-danger' href='delete_country.php?id=<?= $c['country_id'] ?>'>Delete</a>
                        </td>
                    </tr>

            </tbody>
        <?php endforeach; ?>
        </table>
        <div>
            <a href='..\home\home.php'>
                <button>Back to Home</button></a>
        </div>
    </div>
    <script src="../fragments/js/jquery-3.1.1.min.js"></script>
    <script src="../fragments/js/barre.js"></script>
</body>

</html>