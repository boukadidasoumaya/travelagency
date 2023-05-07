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
                    <th scope="col">user_name</th>
                    <th scope="col">user_last_name</th>
                    <th scope="col">email</th>

                    <th scope="col">changes</th>

                </tr>
            </thead>

            <td><?php echo $cl['destination'] ?></td>
            <td><?php echo $cl['user_name'] ?></td>
            <td><?php echo $cl['user_last_name'] ?></td>
            <td><?php echo $cl['email'] ?></td>

            <td>
                <button><a class="btn btn-success" href="update_page.php?updatedid=<?= $cl['id_reservation'] ?> ">update your trip</a></button>
                <button><a href="delete_booking.php?deletedid=<?= $cl['id_reservation'] ?>">cancel your trip</a></button>
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