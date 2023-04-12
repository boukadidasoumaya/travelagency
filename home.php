<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1" />
    <title>Travel Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,600;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src="js/extras.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

</head>

<body>
    <div id="arrow">
        <i class="fa fa-arrow-up"></i>
    </div>

    <?php
    include_once 'fragments/barre.html'

    ?>
    <header>
        <div class="container">
            <div class="header-info-par">
                <h1 class="typewrite" data-period="2000" data-type='["The World Is A Beautiful Place To Be Explored.","Adventure Awaits, go find it.","More Memories All Over The World."]'>
                </h1>


                <p>Traveling is a wonderful experience that allows us to explore new places, cultures, and traditions. It broadens our horizons and exposes us to different perspectives and ways of life.</p>
                <a href="#" class="a">Read More</a>
            </div>
            <div class="video">
                <video id="video" autoplay loop muted>
                    <source src="photos/travel.mp4" type="video/mp4" />
                </video>
            </div>
        </div>
    </header>
    <!-- Second Slides Section -->
    <section id="welcome-text">
        <div class="container">
            <h2>The Official Travel Site of the friendly Fiji Islands</h2>
            <p>when an unknown printer took a gallery of type and scrambled it to make a type speicmen</p>
        </div>
    </section>
    <!-- Slides Section Start-->
    <section id="slides-par">
        <div class="container">
            <div class="slides">
                <div class="slide_1 slide_2">
                    <div class="slide-info">
                        <p>Outer Islands</p>
                    </div>
                </div>
                <div class="slide_1 slide_3">
                    <div class="slide-info">
                        <p>Pacific Harbour and Beqa</p>
                    </div>
                </div>
                <div class="slide_1 slide_4">
                    <div class="slide-info">
                        <p>Savusavu & Surrounds</p>
                    </div>
                </div>
                <div class="slide_1 slide_5">
                    <div class="slide-info">
                        <p>Suncoast</p>
                    </div>
                </div>
                <div class="slide_1 slide_6">
                    <div class="slide-info">
                        <p>Taveun1</p>
                    </div>
                </div>
                <div class="slide_1 slide_7">
                    <div class="slide-info">
                        <p>Yasawa Islands</p>
                    </div>
                </div>
                <div class="slide_1 slide_8">
                    <div class="slide-info">
                        <p>Nadi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Book Now Section Start -->
    <section id="book">
        <div class="container">
            <div class="book-content-par">
                <div class="book-counter">
                    <h3>Book Now</h3>
                    <div id="clockdiv">
                        <div>
                            <span class="days"></span>
                            <div class="smalltext">Days</div>

                        </div>
                        <div>
                            <span class="hours"></span>
                            <div class="smalltext">Hours</div>

                        </div>
                        <div>
                            <span class="minutes"></span>
                            <div class="smalltext">Minutes</div>

                        </div>
                        <div>
                            <span class="seconds"></span>
                            <div class="smalltext">Seconds</div>

                        </div>
                    </div>
                </div>
                <div class="book-form">
                    <form>
                        <input type="text" id="fname" name="firstname" placeholder="Your Name...">
                        <input type="text" id="lname" name="lastname" placeholder="Your Last Name...">
                        <select name="country" id="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="india">USA</option>
                        </select>
                        <textarea name="subject" id="subject" placeholder="Write something..." style="height: 200px;"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Book Now Section End -->





</body>

</html>