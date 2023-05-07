<?php require_once 'bdd.php';
include_once 'navbar.php';
$conn = CBD::getInstance();
$_session['username'] = 'yosr'
?>

<div class="container ">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-plane"></i> Booking Form
        </div>
        <div class="card-body">
            <?php
            if (isset($_GET['booking'])) {
                if ($_GET['booking'] == true) {
            ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Booking saved !
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                }
            }
            ?>
            <form action="save_booking.php" method="POST">
                <div id="form-1">
                    <div class="form-group">
                        <label for="user">Client</label>
                        <?php if ((isset($_session['username']) && ($_session['username']) != 'admin')) {
                            echo ('
                        <div class="form-group">
                            <label for="user">Traveler Name :</label>
                             <select name="user" id="user" class="form-control" disabled>
                            <option value="">' . $_session['username'] . '</option>) ');
                        } else {
                            echo ('
                        <select name="user" id="user" class="form-control">
                            <option value="">Select client</option> ');


                            $sql = "SELECT * FROM user";
                            $result = $conn->query($sql);

                            if ($result->rowCount() > 0) {
                                while ($row = $result->fetch()) {
                                    echo "<option value=\"" . $row["user_id"] . "\">"
                                        . $row["user_name"] . " "
                                        . $row["user_last_name"] .
                                        "</option>";
                                }
                            }
                        }

                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <select name="destination" id="destination" class="form-control">
                            <option value="">Select destination</option>
                            <!-- PHP code to populate select options from database table -->
                            <?php

                            $sql = "SELECT * FROM country";
                            $result = $conn->query($sql);

                            if ($result->rowCount() > 0) {
                                while ($row = $result->fetch()) {
                                    echo "<option value=\"" . $row["country_id"] .
                                        "\" data-price-trip=\"" . $row["price_trip"] .
                                        "\" data-price-car=\"" . $row["price_car"] .
                                        "\" data-tour-guide=\"" . $row["price_tour_guide"] . "
                                    \">"
                                        . $row["country_name"] .
                                        "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="trip-date">Date</label>
                        <input type="date" name="trip-date" id="trip-date" class="form-control" min="<?php echo date('Y-m-d'); ?>">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" name="car_rental" id="car_rental" class="form-check-input">
                        <label class="form-check-label" for="car_rental">Add a car rental to your booking</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" name="tourist_guide" id="tourist_guide" class="form-check-input">
                        <label class="form-check-label" for="tourist_guide">Add tourist guide to your booking</label>
                    </div>

                    <button type="button" id="btn-to-form-2" class="btn btn-primary" onclick="toForm2()">Next</button>
                </div>

                <div id="form-2" class="d-none">

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" readonly>
                    </div>

                    <button type="button" class="btn btn-secondary" onclick="toForm1()">Previous</button>
                    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="../fragments/js/barre.js"></script>

<script>
    const form1 = document.getElementById('form-1')
    const form2 = document.getElementById('form-2')
    const selectDestination = document.getElementById("destination");
    const selectUser = document.getElementById("user");
    const inputTripDate = document.getElementById("trip-date");
    const btnToForm2 = document.getElementById("btn-to-form-2");

    const checkboxCarRental = document.getElementById('car_rental')
    const checkboxtouristGuide = document.getElementById('tourist_guide')
    const priceInput = document.getElementById("price");

    initForm()

    function initForm() {
        if (selectDestination.value.length == 0 ||
            inputTripDate.value.length == 0 ||
            selectUser.value.length) {
            btnToForm2.setAttribute("disabled", true);
        }
    }

    selectDestination.addEventListener("change", function() {
        if (selectDestination.value.length > 0 && inputTripDate.value.length > 0) {
            btnToForm2.removeAttribute("disabled");
        }
    });

    inputTripDate.addEventListener("change", function() {
        if (selectDestination.value.length > 0 && inputTripDate.value.length > 0) {
            btnToForm2.removeAttribute("disabled");
        }
    });

    function toForm2() {
        form1.classList.add('d-none')
        form2.classList.remove('d-none')

        const selectedOption = selectDestination.options[selectDestination.selectedIndex];

        let selectedPrice = selectedOption.getAttribute("data-price-trip");
        checkboxCarRental.checked ? selectedPrice = Number(selectedPrice) + Number(selectedOption.getAttribute("data-price-car")) : null;
        checkboxtouristGuide.checked ? selectedPrice = Number(selectedPrice) + Number(selectedOption.getAttribute("data-tour-guide")) : null;
        priceInput.value = selectedPrice;
    }

    function toForm1() {
        form1.classList.remove('d-none')
        form2.classList.add('d-none')
    }
</script>

</body>


</html>