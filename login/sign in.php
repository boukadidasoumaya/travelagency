<?php if (!isset($_SESSION)) {
  session_start();
}

include_once '../fragments/barrehead.php';

?>

<!--dosis-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">
<!--oleo script-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="../fragments/barre.css">
<link rel="stylesheet" href="styleSignin.css">

<title>Document</title>
</head>

<body>

  <?php
  include_once '../fragments/barre.php';
  ?>
  <div class="container">
    <main>
      <section class="glass container">
        <h1 class="wb">Welcome Back</h1>
        <div>
          <h1>Sign In</h1>
          <?php
          if (isset($_SESSION['error'])) {
          ?>
            <div class="alert alert-danger" style="text-align: center;color: red; padding-bottom: 20px;">
              <?php echo  $_SESSION['error'];
              unset($_SESSION['error']); ?>
            </div>
          <?php } ?>
        </div>
        <form action="login.php" method="post">
          <div class="form-outline ">
            <input type="text/email" placeholder="Username or email" id="form3Example3" class="form-control" name="credentiel" />
          </div>
          <div class="form-outline  ">
            <input type="password" placeholder="Password" id="form3Example4" class="form-control" name="password" />
          </div>

          <button type="submit" class="buton btn btn-primary btn-block mb-4 ">
            Sign In
          </button>
        </form>
        <div><a href="signup.php">
            <h5>Create an account</h5>
          </a></div>
        <div><a href="motdepasse_oublie.php">
            <h5>Forget password?</h5>
          </a></div>

      </section>
    </main>
  </div>





</body>

</html>