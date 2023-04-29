<?php
require_once 'bdd.php';
include_once 'navbar.php';

// Récupération des données envoyées depuis la première page
$destination = $_POST['destination'];
$date = $_POST['date'];
$car_rental = isset($_POST['car_rental']) ? "Yes" : "No";
if (isset($destination)) {
    $sql = "SELECT * FROM country ";
    $result = $conn->query($sql);
}
?>

<div class="container ">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-plane"></i> One Last Step !
        </div>
        <div class="card-body">
            <form action="save_booking.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="num_passport">Passport Number</label>
                    <input type="text" name="num_passport" id="num_passport" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="client_first_name">First Name</label>
                    <input type="text" name="client_first_name" id="client_first_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="client_last_name">Last Name</label>
                    <input type="text" name="client_last_name" id="client_last_name" class="form-control" required>
                </div>
                <div class="form-group d-none">
                    <label for="destination">Destination</label>
                    <input type="text" name="destination" id="destination" class="form-control" value="<?= $destination ?>" readonly>
                </div>
                <div class="form-group d-none">
                    <label for="date">Date</label>
                    <input type="text" name="date" id="date" class="form-control" value="<?= $date ?>" readonly>
                </div>
                <div class="form-group d-none">
                    <label for="car_rental">Car Rental</label>
                    <input type="text" name="car_rental" id="car_rental" class="form-control" value="<?= $car_rental ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="receipt">Receipt</label>
                    <a href="receipt.pdf" download id="receipt-link">Download Receipt</a>
                    <small class="form-text text-muted">Max file size: 2 MB</small>
                    <div class="preview mt-2"></div>
                </div>
                <button type="button" class="btn btn-secondary btn-previous" onclick="window.location.href='form1.php'">Previous</button>
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="../fragments/js/barre.js"></script>
</body>
<?php $conn->close(); ?>

</html>