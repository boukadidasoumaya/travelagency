<?php
include "bdd.php";
require('booking_model.php');
$db = new Booking();

$id_user = htmlspecialchars($_GET['edit_id']);

$reserv = $db->get_reservation($id_user);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>table_edit</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id_reservation</th>
                    <th scope="col">destination</th>
                    <th scope="col">date</th>
                    <th scope="col">num_passport</th>
                    <th scope="col">client_first_name</th>
                    <th scope="col">client_last_name</th>
                    <th scope="col">price-trip</th>
                    <th scope="col">changes</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "Select * from `booking`";
                /*the query method is used to execute the sql statement */
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_reservation = $row['id_reservation'];
                        $destination = $row['destination'];
                        $date = $row['date'];
                        $num_passport = $row['num_passport'];
                        $client_first_name = $row['client_first_name'];
                        $client_last_name = $row['client_last_name'];
                        $price_trip = $row['prix'];
                        echo '<tr>
           <th scope="row">' . $id_reservation . '</th>
           <td>' . $destination . '</td>
           <td>' . $date . '</td>
           <td>' . $num_passport . '</td>
           <td>' . $client_first_name . '</td>
           <td>' . $client_last_name . '</td>
           <td>' . $price_trip . '</td>
           <td> 
           <button><a href="update_booking.php?updatedid=' . $id_reservation . '">update your trip</a></button>
           <button><a href="delete_booking.php?deletedid=' . $id_reservation . '">cancel your trip</a></button>
           </td>
           </tr>';
                    }
                }
                ?>


            </tbody>
        </table>

    </div>

</body>

</html>