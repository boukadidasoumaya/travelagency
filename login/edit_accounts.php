<?php
// Include the database and users files
include_once 'users.php';

// Retrieve all the accounts from the database
$usersObj = new Users();
$users = $usersObj->get_users();
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
    <div class="container my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last name</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Passport</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    foreach ($users as $user) :
                ?>
                    <tr>
                        <th><?= $user['user_id'] ?></th>
                        <td><?= $user['user_name'] ?></td>
                        <td><?= $user['user_last_name']  ?></td>
                        <td><?= $user['date_birth']  ?></td>
                        <td><?= $user['email']  ?></td>
                        <td><?= $user['country']?></td>
                        <td><?= $user['city'] ?></td>
                        <td><?= $user['num_passport']?></td>

                        <td>
                            <a class='btn btn-success' href='..\login\profilaccesAdmin.php?id=<?= $user['user_id']  ?>'>Edit</a>
                            <a class='btn btn-danger' href='delete_account.php?id=<?= $user['user_id'] ?>'>Delete</a>
                        </td>
                    </tr>

            </tbody>
        <?php endforeach; ?>
        </table>
        <div>
            <a href='..\home\home.php'>
        <button >Back to Home</button></a>
        </div>
    </div>

</body>

</html>