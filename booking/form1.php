<?php require_once 'bdd.php';
include_once 'navbar.php'; ?>

<div class="container ">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-plane"></i> Book Now
        </div>
        <div class="card-body">
            <form id="form1" action="form2.php" method="POST">
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <select name="destination" id="destination" class="form-control" required>
                        <option value="10000000">Select destination</option>
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
                    <input type="date" name="date" id="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" required>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="car_rental" id="car_rental" class="form-check-input">
                    <label class="form-check-label" for="car_rental">Add a car rental to your booking</label>
                </div>

                <button type="submit" class="btn btn-primary btn-submit">Next</button>

            </form>
        </div>
    </div>
</div>

<script src="../fragments/js/barre.js"></script>
</body>
<?php $conn->close(); ?>

</html>