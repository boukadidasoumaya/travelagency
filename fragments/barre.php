<?php
session_start();

?>
</head>

<body>
    <nav>
        <div class="container">
            <div class="menu-par">
                <div class="logo-par ">
                    <a href="#head">
                        <img src="../fragments/images/think travel1.png" alt="logo" class="logo">
                    </a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a class="menu-hover" href="../home/home.php">Home</a></li>
                        <li><a class="menu-hover" href="../home/home.php#about">About</a></li>
                        <li><a class="menu-hover" href="../booking/booking.php">Book Now</a></li>
                        <li><a class="menu-hover" href="../home/home.php#welcome">Our Trips</a></li>


                        <?php

                        if (isset($_SESSION)) {

                            if ($_SESSION['user_name'] = 'admin') {
                                echo '<li><a class="menu-hover" href="../login/edit_accounts.php">Edit accounts</a></li>';
                            } else {

                                echo  '<li><a class="menu-hover" href="../login/profil.php">Profil</a></li>';
                            }
                        } else {

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