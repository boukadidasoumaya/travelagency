<?php
if (!isset($_SESSION)) {
    session_start();
}

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>&#9992; Booking Form</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Custom CSS -->

    <link rel="stylesheet" href="booking.css">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,600;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link type="text/css" rel="stylesheet" href="navbar.css">
</head>

<body>
    <nav>
        <div class="container1 ">
            <div class="menu-par ">
                <div class="logo-par ">
                    <a href="../home/home.php">
                        <img src="../fragments/images/think travel1.png" alt="logo" class="logo">
                    </a>
                </div>
                <div class="nav ">
                    <ul>
                        <li><a class="menu-hover" href="../home/home.php">Home</a></li>
                        <li><a class="menu-hover" href="../home/home.php#about">About</a></li>
                        <li><a class="menu-hover" href="../booking/booking.php">Book Now</a></li>
                        <li><a class="menu-hover" href="../home/home.php#welcome">Our Trips</a></li>


                        <?php


                        if (isset($_SESSION)  && isset($_SESSION['user_name'])) {

                            if ($_SESSION['user_name'] == 'admin') {
                                echo '<li><a class="menu-hover" href="../login/edit_accounts.php">Edit_accounts</a></li>
                                <li><a class="menu-hover" href="../login/edit_bookingadmin.php">Edit_booking</a></li>
                                <li><a class="menu-hover" href="../login/log_out.php?logout=1">Log out </a>
                                
                                </li>';
                            } else {

                                echo  '<li><a class="menu-hover" href="../login/profil.php?id=' . $_SESSION["user_id"] . '">Profil</a>

                                </li>
                                <li><a class="menu-hover" href="../login/log_out.php?logout=1">Log out </a>
                                
                                </li>';
                            }
                        } else if (!isset($_SESSION['user_name'])) {

                            echo '<li><a class="menu-hover" href="../login/sign in.php">Register/Login</a></li>';
                        }
                        ?>


                    </ul>
                </div>
                <div id="toggle-btn" class="toggle">
                    <i class="fa-solid fa-bars fa-xl" style="color:#00a8b4;"></i>
                </div>
            </div>
        </div>
    </nav>