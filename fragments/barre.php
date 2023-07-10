<?php
if (!isset($_SESSION)) {
  session_start();
}


?>
</head>

<body>
  <nav>
    <div class="container">
      <div class="menu-par">
        <div class="logo-par ">
          <a href="../home/home.php">
            <img src="../fragments/images/think travel1.png" class="logo">
          </a>
        </div>
        <div class="nav">
          <ul>
            <li><a class="menu-hover" href="../home/home.php">Home</a></li>
            <li><a class="menu-hover" href="../home/home.php#about">About</a></li>
            <li><a class="menu-hover" href="../booking/booking.php">Book Now</a></li>
            <li><a class="menu-hover" href="../home/home.php#welcome">Our Trips</a></li>


            <?php

            if (isset($_SESSION)  && isset($_SESSION['user_name'])) {

              if ($_SESSION['user_name'] == 'admin') {
                echo '<li><a class="menu-hover" href="../login/edit_accounts.php">Edit_accounts</a></li>
                                <li><a class="menu-hover" href="../booking/edit_bookingadmin.php">Edit_booking</a></li>
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