<!-- $user->motdepasse_oublie($token, $_POST['email']); -->

<?php include_once '../fragments/barrehead.php';

include_once 'users.php';
$user = new users();



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
            <form method="post">
                <div class="form-outline ">
                    <input placeholder="Enter your new password" id="form3Example3" class="form-control" name="password" />
                </div>
                <div class="form-outline ">
                    <input placeholder="Verify your new password" id="form3Example3" class="form-control" name="" />
                </div>
                <button type="submit" class="buton btn btn-primary btn-block mb-4 ">
                    Change Password
                </button>

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

<?php
if (isset($_POST['password'])) {


    $id = $_GET['id'];
    $user->motdepasse_oublie($id, $_POST['password']);
    header('Location: sign in.php');
} else {
    echo  "please enter password";
}
