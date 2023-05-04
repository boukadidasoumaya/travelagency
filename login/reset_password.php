<!-- $user->motdepasse_oublie($token, $_POST['email']); -->

<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once '../fragments/barrehead.php';

include_once 'users.php';
$user = new users();
if (isset($_SESSION)) {
    if (isset($_SESSION['code']) && $_SESSION['code'] != $_POST['code']) {
        $_SESSION['error_code'] = 'Please Verify your code';
        header('Location:../login/verify_code.php');
    }
}




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
<title>Reset Password</title>
</head>

<body>

    <?php
    include_once '../fragments/barre.php'
    ?>
    <main>

        <section class="glass main">
            <h1 class="wb">Welcome </h1>
            <div>
                <h1>Reset Password</h1>

            </div>
            <form action="update_password.php" method="post">
                <div class="form-outline ">
                    <input type="password" placeholder="Enter your new password" id="password" class="form-control" name="password" required />
                </div>
                <div class="form-outline ">
                    <input type="password" placeholder="Verify your new password" id="passwordv" class="form-control" name=""  required/>
                </div>
                <button id="ajouter" type="submit" class="buton" disabled>
                    Change Password
                </button>
                <?php unset($_SESSION['code']); ?>
            </form>
        </section>
    </main>
    <footer>
        <?php include_once '../fragments/footer.php' ?>
    </footer>
    <script src="reset_password.js"></script>
    <script src="../fragments/js/jquery-3.1.1.min.js"></script>
    <script src="../fragments/js/barre.js"></script>
</body>

</html>