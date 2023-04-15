<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,600;1,300&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../fragments/barre.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <div id="arrow">
        <i class="fa fa-arrow-up"></i>
    </div>
    <?php
    include_once '../fragments/barre.php'
    ?>

    <header>
        <div class="container">
            <div class="header-info-par">
                <h1 class="typewrite" data-period="2000" data-type='["Travel brings power and love back into your life.","Travel far, travel wide, travel often.","Adventure Awaits, go find it."]'>
                </h1>
                <p>Traveling is a wonderful experience that allows us to explore new places, cultures, and traditions.
                    It broadens our horizons and exposes us to different perspectives and ways of life.</p>
                <a href="#" class="a">Read More</a>
            </div>
            <div class="video">
                <video id="video" autoplay loop muted>
                    <source src="homevideo.mp4" type="video/mp4" />
                </video>
            </div>
        </div>
    </header>
    <section id="welcome-text">
        <div class="container">
            <h2>The Official Travel Site of the Think travel agency</h2>
            <p>when an unknown printer took a gallery of type and scrambled it to make a type speicmen</p>
        </div>
    </section>
    <!-- Slides Section Start-->
    <section id="slides-par">
        <div class="container">
            <div class="slides">
                <img id="image1" src="sticker2.jpg" width="200px" height="200px">
                <div class="slide_1 slide_2">
                    <div class="slide-info">
                        <p>italie</p>
                    </div>
                </div>
                <div class="slide_1 slide_3">
                    <div class="slide-info">
                        <p>Bali</p>
                    </div>
                </div>
                <div class="slide_1 slide_4">
                    <div class="slide-info">
                        <p>Greece</p>
                    </div>
                </div>
                <div class="slide_1 slide_5">
                    <div class="slide-info">
                        <p>Suisse</p>
                    </div>
                </div>
                <div class="slide_1 slide_6">
                    <div class="slide-info">
                        <p>Iceland</p>
                    </div>
                </div>
                <div class="slide_1 slide_7">
                    <div class="slide-info">
                        <p>Tunisia</p>
                    </div>
                </div>
                <div class="slide_1 slide_8">
                    <div class="slide-info">
                        <p>Japan</p>
                    </div>
                </div>
                <img id="image2" src="sticker3.jpg" width="200px" height="200px">
            </div>
        </div>
    </section>
    <!-- Slides Section Start-->




    <script src="../fragments/js/jquery-3.1.1.min.js"></script> <!--tkhali el barre tahbet-->
    <script src="../fragments/js/barre.js"></script>
</body>

</html>