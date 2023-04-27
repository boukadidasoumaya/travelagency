<?php include_once '../fragments/barrehead.php' ?>

<link rel="stylesheet" href="styleSignin.css">
<!--dosis-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">
<!--oleo script-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../fragments/barre.css">
<link rel="stylesheet" href="../fragments/footer.css">
<title>Document</title>
</head>

<body>
  <?php
  include_once '../fragments/barre.php'
  ?>
  <main>
    <section class="glass main">
      <h1 class="wb">Welcome Back</h1>
      <div>
        <h1>Sign In</h1>
      </div>
      <div class="form-outline ">
        <input type="email" placeholder="Username or email" id="form3Example3" class="form-control" />
      </div>
      <div class="form-outline  ">
        <input type="password" placeholder="Password" id="form3Example4" class="form-control" />
      </div>

      <button type="submit" class="buton btn btn-primary btn-block mb-4 ">
        Sign In
      </button>
      <div><a href="signup.php">
          <h4>Create an account</h4>
        </a></div>
      <div><a href="">
          <h4>Forget password?</h4>
        </a></div>

    </section>
  </main>
  <footer>
    <?php include_once '../fragments/footer.php' ?>
  </footer>

  <script src="../fragments/js/jquery-3.1.1.min.js"></script> <!--tkhali el barre tahbet-->
  <script src="../fragments/js/barre.js"></script>
</body>

</html>