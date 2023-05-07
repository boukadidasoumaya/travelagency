<?php if (!isset($_SESSION)) {
    session_start();
}
include_once 'users.php';
$user = new users();
$user = $user->get_users_byid($_GET['id']);
$reservation = new users();
$reservation = $reservation->get_reservation($_GET['id']);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
        <form action="edit_profil.php?id=<?= $_GET['id'] ?>" method="post">
            <div class="container rounded bg-white ">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="<?= $user['photo_profil'] ?>">
                            <label for="fileInput" id="changePhotoIcon"><i class="fa-solid fa-pen-to-square"></i></label>
                            <input type="file" id="fileInput" name="fileInput" style="display: none;"> <span class="font-weight-bold"><?= $user['user_name'] ?></span>
                        </div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels"></label><input type="text" name="user_name" class="form-control" placeholder="First Name" value="<?= $user['user_name'] ?>"></div>
                                <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="user_last_name" class="form-control" value="<?= $user['user_last_name'] ?>" placeholder="Last Name"></div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Date Birth</label><input type="date" name="birthday" class="form-control" value="<?= $user['date_birth'] ?>"></div>
                                <div class="row mt-3">
                                    <div class="col-md-6"><label class="labels">Country</label><input type="text" name="country" class="form-control" placeholder="country" value="<?= $user['country'] ?>"></div>
                                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" name="city" class="form-control" value="<?= $user['city'] ?>" placeholder="state"></div>
                                </div>
                                <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email" class="form-control" value="<?= $user['email'] ?>"></div>

                                <div class="col-md-12"><label class="labels">Num Passport</label><input type="text" class="form-control" name="passport" value="<?= $user['num_passport'] ?>"></div>
                                <div class="col-md-12"><label class="labels">Your Reservation</label> <textarea type="text" class="form-control" value=""><?php foreach ($reservation as $r) : ?> <?= $r['country_name'] ?> <?= $r['date'] ?> <?php endforeach; ?></textarea></div>


                            </div>

                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>

                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit"><a href="../booking/edit_booking.php?edit_id=<?= $user['user_id'] ?>">Edit reservation</a></div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center experience"><span>Edit Your History Shared With Think Travel</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Edit</span></div><br>
                            <div class="col-md-12"><input type="text" class="form-control" placeholder="experience" value=""></div> <br>

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