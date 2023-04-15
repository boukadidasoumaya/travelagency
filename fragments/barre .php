<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="barre.css">
</head>

<body>
    <nav>
        <div class="container">
            <div class="menu-par">
                <div class="logo-par">
                    <a href="index.html">
                        <img src="think travel1.png" alt="logo" class="logo">
                    </a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a class="menu-hover" href="index.html">Home</a></li>
                        <li><a class="menu-hover" href="index.html">Travel</a></li>
                        <li><a class="menu-hover" href="index.html">Book Now</a></li>
                        <li><a class="menu-hover" href="index.html">Gallery</a></li>
                        <li><a class="menu-hover" href="index.html">Holyday</a></li>
                        <li><a class="menu-hover" href="index.html">Blog</a></li>
                    </ul>
                </div>
                <div id="toggle-btn">
                    <img src="menu (4).png">
                </div>
            </div>
        </div>
    </nav>

    <script src="js/jquery-3.1.1.min.js"></script> <!--tkhali el barre tahbet-->
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 100) {
                $('nav').addClass('nav-fixed');
            } else {
                $('nav').removeClass('nav-fixed');
            }
        });
        $(document).ready(function() {
            $(".toggle-btn").click(function() {
                $(".nav").toggleClass("nav-active");
                $(".toggle-btn i").toggleClass("nav-active");
            });
        });
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $("#arrow i").fadeIn();
                } else {
                    $("#arrow i").fadeOut();
                }

            });
            $("#arrow i").on('click', function() {
                $("html,body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });

        });
        // Toggle button
        $(document).ready(function() {
            $("#toggle-btn").click(function() {
                $(".nav").toggleClass("nav-active");
                $("#toggle-btn i").toggleClass("nav-active");
            });
        });
    </script>
</body>

</html>