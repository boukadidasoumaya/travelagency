<?php
require('users.php');
$db = new users();

$account_selected = $db->get_user_by_id($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../fragments/barre.css">
    <link rel="stylesheet" href="../fragments/footer.css">
    <title>Profil</title>
</head>

<body>
    <header>
        <?php
        include_once '../fragments/barre.php'
        ?>
    </header>
    <section>
        <form action="edit_profil.php" method="post">
            <div class="container rounded bg-white ">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            <span class="font-weight-bold">Edogaru</span>
                        </div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-4"><label class="labels">Name</label><input type="text" class="form-control" name="name" value="<?= $account_selected['user_name'] ?>"></div>
                                <div class="col-md-4"><label class="labels">Last Name</label><input type="text" class="form-control" name="lastname" value="<?= $account_selected['user_last_name'] ?>" ></div>
                                <div class="col-md-4"><label class="labels">ID</label><input type="text" class="form-control" name="id" value="<?= $account_selected['user_id'] ?>" readonly ></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Date Birth</label><input type="text" class="form-control" name="birthday" value="<?= $account_selected['date_birth']?>"></div>
                                <div class="row mt-3">
                                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" name="country" value="<?= $account_selected['country'] ?>"></div>
                                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" name="city" value="<?= $account_selected['city'] ?>" ></div>
                                </div>
                                <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" name="email" value="<?= $account_selected['email'] ?>"></div>

                                <div class="col-md-12"><label class="labels">Num Passport</label><input type="text" class="form-control" name="passport" value="<?= $account_selected['num_passport'] ?>"></div>
                                <div class="col-md-12"><label class="labels">Reservation</label><input type="text" class="form-control" value=""></div>
                            </div>

                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center experience"><span>Travel History</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </form>
    </section>

    <?php include_once '../fragments/footer.php' ?>



    <script src="../fragments/js/jquery-3.1.1.min.js"></script>
    <script src="../fragments/js/barre.js"></script>
</body>

</html>