<?php require_once 'bdd.php';
include_once 'navbar.php'; ?>


<div class="container ">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-plane"></i> Booking Form
        </div>
        <div class="card-body">
            <!--form1-->
            <form id="form1" action="#form2" method="POST">
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <select name="destination" id="destination" class="form-control">
                        <option value="">Select destination</option>
                        <!-- PHP code to populate select options from database table -->
                        <?php

                        $sql = "SELECT * FROM country";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value=\"" . $row["country_id"] . "\">" . $row["country_name"] . "</option>";
                            }
                        }


                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" class="form-control" min="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="car_rental" id="car_rental" class="form-check-input">
                    <label class="form-check-label" for="car_rental">Add a car rental to your booking</label>
                </div>
                <button type="button" class="btn btn-primary" onclick="showForm2()">Next</button>
            </form>
            <script>
                /**/
                function showForm2() {
                    /*document.getElementById("form1").style.display = "none";
                    document.getElementById("form2").style.display = "block";
                    //document.getElementById("form1").submit();*/
                }
            </script>


            <!--form2-->
            <form id="form2" action="save_booking.php" method="POST">
                <?php
                $id_pays = $_POST['destination'];
                $price_trip = 0;
                $price_car = 0;
                echo $id_pays;

                $sql = `SELECT * FROM country where country_id = $id_pays`;
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $price_trip = $row["price_trip"];
                    if (isset($_POST['car_rental']) && $_POST['car_rental'] == 'on') {

                        $price_car = $row["price_car"];
                    }
                }
                /**/
                ?>

                <div class="form-group">
                    <label for="num_passport">Passport Number</label>
                    <input type="text" name="num_passport" id="num_passport" class="form-control">
                </div>
                <div class="form-group">
                    <label for="client_first_name">First Name</label>
                    <input type="text" name="client_first_name" id="client_first_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="client_last_name">Last Name</label>
                    <input type="text" name="client_last_name" id="client_last_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" readonly placeholder="<?= $price_car + $price_trip ?>">
                </div>

                <div class="form-group">

                    <label for="receipt">Receipt</label>
                    <a href="receipt.pdf" download id="receipt-link">Download Receipt</a>

                    <small class="form-text text-muted">Max file size: 2 MB</small>
                    <div class="preview mt-2"></div>
                </div>
                <button type="button" class="btn btn-secondary" onclick="showForm1()">Previous</button>
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>

            </form>
            <script>
                function showForm1() {
                    document.getElementById("form1").submit();
                    document.getElementById("form1").style.display = "block";
                    document.getElementById("form2").style.display = "none";

                }
            </script>
        </div>
    </div>
</div>


<script src="../fragments/js/barre.js"></script>
<script>
    function showForm1() {
        document.getElementById("form1").submit();
        document.getElementById("form1").style.display = "block";
        document.getElementById("form2").style.display = "none";

    }

    function showForm2() {
        document.getElementById("form1").style.display = "none";
        document.getElementById("form2").style.display = "block";

    }
</script>
</body>
<?php $conn->close(); ?>

</html>