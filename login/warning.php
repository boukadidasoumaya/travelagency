<?php if (!isset($_SESSION)) {
  session_start();
}

include_once '../fragments/barrehead.php';

?>

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
  include_once '../fragments/barre.php';
  ?>
  <main>

    <section class="glass main">
      <h1 class="wb">Account Already Exists</h1>
      <div>
        <h1>Please use a different email or login instead</h1>
      </div>
      
        <a href="sign in.php">
        <button type="submit" class="buton btn btn-primary btn-block mb-4 ">
          Sign In
        </button></a>
        <br><br><br>
        <a href="signup.php">
        <button type="submit" class="buton btn btn-primary btn-block mb-4 ">
          Create an account
        </button></a>
      </form>
      
    </section>
  </main>
  <footer>
    <?php include_once '../fragments/footer.php' ?>
  </footer>

  <script src="../fragments/js/jquery-3.1.1.min.js"></script>
  <script src="../fragments/js/barre.js"></script>
</body>

</html>