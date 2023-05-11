<?php
include "bdd.php";
require('booking_model.php');
$db = new Booking();
$clients = $db->get_clients();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>table_editadmin</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id_reservation</th>
                    <th scope="col">date</th>
                    <th scope="col">price-trip</th>
                    <th scope="col">user_id</th>
                    <th scope="col">destination</th>
                    <th scope="col">user_name</th>
                    <th scope="col">user_last_name</th>
                    <th scope="col">email</th>

                    <th scope="col">changes</th>

                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($clients as $cl) :
                ?>
                    <tr>
                    
                        <th scope="row"><?php echo $cl['id_reservation'] ?></th>
                        <td><?php echo $cl['date'] ?></td>
                        <td><?php echo $cl['prix'] ?></td>
                        <td><?php echo $cl['user_id'] ?></td>

                        <td><?php echo $cl['destination_name'] ?></td>
                        <td><?php echo $cl['user_name'] ?></td>
                        <td><?php echo $cl['user_last_name'] ?></td>
                        <td><?php echo $cl['email'] ?></td>


                        <td>
                            <a class='btn btn-success' href="update_page.php?updatedid=<?= $cl['id_reservation'] ?> ">Edit</a>
                            <a class='btn btn-danger' href="delete_booking.php?deletedid=<?= $cl['id_reservation'] ?>">Delete</a>
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

</body>

</html>