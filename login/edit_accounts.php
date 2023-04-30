<?php
// Include the database and users files
include_once 'users.php';

// Retrieve all the accounts from the database
$usersObj = new Users();
$users = $usersObj->get_users();

// Display the accounts in a table format
echo '<table>';
echo '<tr><th>ID</th><th>Username</th><th>Email</th><th>Passport</th><th>Edit</th><th>Delete</th></tr>';
foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user['user_id'] . '</td>';
    echo '<td>' . $user['user_name'] . '</td>';
    echo '<td>' . $user['user_last_name'] . '</td>';
    echo '<td>' . $user['num_passport'] . '</td>';
    echo '<td><a href="profil.php?id=' . $user['user_id'] . '">Edit</a></td>';
    echo '<td><a href="delete_account.php?id=' . $user['user_id'] . '">Delete</a></td>';
    echo '</tr>';
}
echo '</table>';
?>