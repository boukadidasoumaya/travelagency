<?php

if (!isset($_SESSION)) {
    session_start();
}



include_once '../fragments/barrehead.php'; ?>

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
<title>Mail sent</title>
</head>

<body>

    <?php
    include_once '../fragments/barre.php'
    ?>
    <main>

        <section class="glass main">
            <h1 class="wb">Mail sent </h1>
            <div>
                <div>
                    <h1>Please check out your email</h1>
                    <?php
                    if (isset($_SESSION['error_code'])) {
                    ?>
                        <div class="alert alert-danger" style="text-align: center;color: red; padding-bottom: 20px;">
                            <?php echo  $_SESSION['error_code'];
                            unset($_SESSION['error_code']); ?>
                        </div>
                    <?php } ?>
                    <form action="reset_password.php" method="post">
                        <div class="form-outline ">
                            <input type="number" placeholder="Enter the code sent" id="form3Example3" class="form-control" name="code" />
                        </div>
                        <button type="submit" class="buton btn btn-primary btn-block mb-4 ">
                            Confirm code
                        </button>
                    </form>
                </div>




        </section>
    </main>
    <footer>
        <?php include_once '../fragments/footer.php' ?>
    </footer>

    <script src="../fragments/js/jquery-3.1.1.min.js"></script>
    <script src="../fragments/js/barre.js"></script>
</body>

</html>