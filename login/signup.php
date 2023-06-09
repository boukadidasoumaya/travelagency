<?php include_once '../fragments/barrehead.php' ?>
<?php 
    if (!isset($_SESSION)) {
      session_start();
  }
  
include_once '../fragments/barrehead.php' ?>
<link rel="stylesheet" href="StyleV2.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Castoro+Titling&display=swap" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../fragments/barre.css">
<!--<link rel="stylesheet" href="../fragments/footer.css">-->
<link rel="stylesheet" href="cn.css">

<title>Document</title>
</head>

<body>
  <section class="pagehome">
  <?php
  include_once '../fragments/barre.php'
  ?>
  <div class="container" style="padding-top: 15vh; padding-bottom: 5vh;">
    <div class="row">
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

        <form action="create_user_accountant.php " method='POST'>

          <div>
            <h2 class="acc">Create an Account</h2>
          </div>
          <?php
                    if (isset($_SESSION['error_code'])) {
                    ?>
                        <div class="alert alert-danger" style="text-align: center;color: red; padding-bottom: 20px;">
                            <?php echo  $_SESSION['error_code'];
                            unset($_SESSION['error_code']); 
                            ?>
                        </div>
          <?php } ?>
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row username ">
            <div class="form-outline col-lg-6 col-md-6 col-sm-6">
              <input type="text" id="name" name="name" onkeypress="return /[a-zA-Z]/i.test(event.key)" placeholder="Name" class="input" required>
            </div>
            <div class="form-outline col-lg-6 col-md-6 col-sm-6">
              <input type="text" id="lastname" name="lastname" onkeypress="return /[a-zA-Z]/i.test(event.key)" placeholder="Last name" class="input" required>
            </div>

          </div>

          <!--birthday-->
          <div class="row birthday">
            <label class="txtbirth col-lg-2 col-md-2 col-sm-2 " for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" name="birthday" class="input b col-lg-4 col-md-4 col-sm-4" required>
          </div>
          <!--City-->
          <div class="row location ">

            <div class="form-outline col-lg-6 col-md-6 col-sm-6 ">
              <input type="text" id="country" name="country" onkeypress="return /[a-zA-Z]/i.test(event.key)" placeholder="Country" class="input" required>
            </div>

            <div class="form-ouline col-lg-6 col-md-6 col-sm-6 ">
              <input type="text" name="city" id="city" onkeypress="return /[a-zA-Z]/i.test(event.key)" placeholder="City" class="input" required>
            </div>

          </div>

          <!--passport-->
          <div class="row passport">
            <input type="text" name="passport" id="passport" onkeypress="return /[A-Z]/i.test(event.key) || /[0-9]/.test(event.key)" maxlength="8" placeholder="Passport" class="p input  col-lg-11 col-md-11 col-sm-11" required>
            <i class="icon col-lg-1 col-md-1 col-sm-1" id="passportValidationIcon"></i>
          </div>
          <!-- Email input -->
          <div class="email ">
            <!--label class="form-label" for="form3Example3">Email Address*</label-->
            <input type="email" name="email" id="email" class="input p" placeholder="Email" required>
          </div>
          <!-- Password input -->
          <div class="password">
            <div class="hide">
              <input type="password" placeholder="Password" name="password" id="password" class="input p" required>
              <!--i class="far fa-eye  eye" id="togglePassword"></i-->
            </div>
            <p class="rule">Password must at least 6 character. </p>
          </div>

          <!--verify-->
          <div class="verify-password ">
            <div class="hide">
              <input type="password" placeholder="Confirm Password" id="passwordv" class="input p" required>
              <!--i class="far fa-eye  eye" id="togglePassword"></i-->
            </div>

          </div>

          <!-- Submit button -->
          <div class="start">
            <button type="submit" id="ajouter" disabled class=" buton ">
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



  <script src="sign up.js"></script>
  <script src="../fragments/js/jquery-3.1.1.min.js"></script>
  <script src="../fragments/js/barre.js"></script>

  <?php include_once '../fragments/footer.php' ?>
</body>

</html>