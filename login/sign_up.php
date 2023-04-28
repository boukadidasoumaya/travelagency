<?php include_once '../fragments/barrehead.php' ?>
<link rel="stylesheet" href="StyleV2.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Castoro+Titling&display=swap" rel="stylesheet">

<title>Document</title>
</head>

<body>
    <?php
    include_once '../fragments/barre.php'
    ?>
    <section>
        <div class="row  ">
            <div class="slogan col-lg-5">
                <div class="txt">
                    <p>Life is short</p>
                </div>
                <div class="txt">
                    <p>And</p>
                </div>
                <div class="txt">
                    <p>The world is wide</p>
                </div>
            </div>
            <div class="form col-lg-7 ">
                <form>

                    <div>
                        <h2 class="acc">Create an Account</h2>
                    </div>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row username ">

                        <div class="form-outline col-lg-6 col-md-6 col-sm-6 ">
                            <!-- <label class="form-label" for="form3Example1">Name*</label> -->
                            <input type="text" id="form3Example1" placeholder="Name" class="input" />
                        </div>


                        <div class="form-outline col-lg-6 col-md-6 col-sm-6">
                            <!-- <label class="form-label" for="form3Example1">Name*</label> -->
                            <input type="text" id="form3Example2" placeholder="Last name" class="input" />
                        </div>

                    </div>

                    <!--birthday-->
                    <div class="row birthday">
                        <label class="txtbirth col-lg-2 col-md-2 col-sm-2 " for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday" class="input b col-lg-4 col-md-4 col-sm-4">
                    </div>
                    <!--City-->
                    <div class="row location ">

                        <div class="form-outline col-lg-6 col-md-6 col-sm-6 ">
                            <input type="text" id="form3Example5" placeholder="Country" class="input" />
                        </div>

                        <div class="form-ouline col-lg-6 col-md-6 col-sm-6 ">
                            <input type="text" id="form3Example6" placeholder="City" class="input" />
                        </div>

                    </div>

                    <!--passport-->
                    <div class="passport">
                        <input type="text" id="form3Example7" placeholder="Passport" class="input p">
                    </div>
                    <!-- Email input -->
                    <div class="email  ">
                        <!--label class="form-label" for="form3Example3">Email Address*</label-->
                        <input type="email" id="form3Example3" class="input p" placeholder="Email" />
                    </div>

                    <!-- Password input -->
                    <div class="password">
                        <div class="hide">
                            <input type="password" placeholder="Password" id="form3Example4" class="input p">
                            <!--i class="far fa-eye  eye" id="togglePassword"></i-->
                        </div>
                        <p class="rule">Password must at least 6 character. </p>
                    </div>

                    <!--verify-->
                    <div class="verify-password ">
                        <div class="hide">
                            <input type="password" placeholder="Confirm Password" id="form3Example4" class="input p">
                            <!--i class="far fa-eye  eye" id="togglePassword"></i-->
                        </div>

                    </div>

                    <!-- Submit button -->
                    <div class="start">
                        <button type="submit" class=" buton ">
                            Start your Journey
                        </button>
                    </div>

                    <!--signin-->
                    <div><a class="signinlink" href="sign in.php">
                            <h6 class="signin">Already have an account? Sign In</h6>
                        </a></div>
            </div>
            </form>
        </div>

        </div>
    </section>
    <section>

        <?php include_once '../fragments/footer.php' ?></section>


    <script src="../fragments/js/jquery-3.1.1.min.js"></script> <!--tkhali el barre tahbet-->
    <script src="../fragments/js/barre.js"></script>
</body>

</html>