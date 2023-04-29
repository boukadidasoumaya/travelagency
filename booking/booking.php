<?php require_once 'bdd.php' ?>


<?php include_once 'navbar.php' ?>


<div class="container ">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-plane"></i> Booking Form
        </div>
        <div class="card-body">
            <form action="save_booking.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <select name="destination" id="destination" class="form-control">
                        <option value="">Select destination</option>
                        <!-- PHP code to populate select options from database table -->
                        <?php

                        $sql = "SELECT country_name FROM country";
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
                    <input type="number" name="price" id="price" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <!--<label for="receipt">Receipt</label>
                        <div class="custom-file">
                            <input type="file" name="receipt" id="receipt" class="custom-file-input">
                            <label class="custom-file-label" for="receipt">Choose file</label>
                        </div>-->

                    <label for="receipt">Receipt</label>
                    <a href="receipt.pdf" download id="receipt-link">Download Receipt</a>

                    <small class="form-text text-muted">Max file size: 2 MB</small>
                    <div class="preview mt-2"></div>
                </div>
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                <button type="submit" class="btn btn-primary btn-submit">Cancel your trip</button>
                <button type="submit" class="btn btn-primary btn-submit">Modify</button>

            </form>
        </div>
    </div>
</div>


<script src="../fragments/js/barre.js"></script>
</body>
<?php $conn->close(); ?>

</html>