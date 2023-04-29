<?php require_once 'bdd.php';
include_once 'navbar.php';
// Define a variable to store the selected country's price data

?>


<div class="container ">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-plane"></i> Booking Form
        </div>
        <div class="card-body">
            <form action="save_booking.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <select name="destination" id="destination" class="form-control" onchange="updatePrice()">
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
                    <?php $selected_country_price = null;

                    // Check if a country is selected
                    if (isset($_POST['destination'])) {
                        $destination_id = $_POST['destination'];

                        // Fetch the selected country's price data from the database
                        $sql = "SELECT price_trip, price_car, price_tour_guide FROM country WHERE country_id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $destination_id);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // If data is found, store it in the variable
                        if ($result->num_rows > 0) {
                            $selected_country_price = $result->fetch_assoc();
                        }
                    } ?>
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="<?php $selected_country_price ?>" readonly>
                </div>

                <div class="form-group">

                    <label for="receipt">Receipt</label>
                    <a href="receipt.pdf" download id="receipt-link">Download Receipt</a>

                    <small class="form-text text-muted">Max file size: 2 MB</small>
                    <div class="preview mt-2"></div>
                </div>
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>

            </form>
        </div>
    </div>
</div>


<script src="../fragments/js/barre.js"></script>
<script>
    /*const destinationSelect = document.querySelector('#destination');
    const priceInput = document.querySelector('#price');
    const carRentalCheckbox = document.querySelector('#car_rental');

    destinationSelect.addEventListener('change', () => {
        const selectedOption = destinationSelect.options[destinationSelect.selectedIndex];
        const selectedPrice = selectedOption.dataset.price;

        if (carRentalCheckbox.checked) {
            priceInput.value = parseFloat(selectedPrice) + parseFloat(selectedOption.dataset.price_car);
        } else {
            priceInput.value = selectedPrice;
        }
    });

    carRentalCheckbox.addEventListener('change', () => {
        const selectedOption = destinationSelect.options[destinationSelect.selectedIndex];
        const selectedPrice = selectedOption.dataset.price;

        if (carRentalCheckbox.checked) {
            priceInput.value = parseFloat(selectedPrice) + parseFloat(selectedOption.dataset.price_car);
        } else {
            priceInput.value = selectedPrice;
        }
    });
    const destinationSelect = document.querySelector('#destination');
    const priceInput = document.querySelector('#price');
    const carRentalCheckbox = document.querySelector('#car_rental');

    // Get the initial price when the page is loaded
    let price = 0;
    if (destinationSelect.value !== '') {
        const selectedOption = destinationSelect.options[destinationSelect.selectedIndex];
        price = parseInt(selectedOption.dataset.price);
    }
    priceInput.value = price;

    // Update the price when the destination or car rental options change
    destinationSelect.addEventListener('change', () => {
        const selectedOption = destinationSelect.options[destinationSelect.selectedIndex];
        price = parseInt(selectedOption.dataset.price);
        if (carRentalCheckbox.checked) {
            price += parseInt(selectedOption.dataset.carPrice);
        }
        priceInput.value = price;
    });

    carRentalCheckbox.addEventListener('change', () => {
        const selectedOption = destinationSelect.options[destinationSelect.selectedIndex];
        if (carRentalCheckbox.checked) {
            price += parseInt(selectedOption.dataset.carPrice);
        } else {
            price -= parseInt(selectedOption.dataset.carPrice);
        }
        priceInput.value = price;
    });*/
    const destinationSelect = document.querySelector('#destination');
    const priceInput = document.querySelector('#price');
    const carRentalCheckbox = document.querySelector('#car_rental');

    function updatePrice() {
        const selectedOption = destinationSelect.options[destinationSelect.selectedIndex];
        const selectedPrice = selectedOption.dataset.price;
        let price = selectedPrice;
        if (carRentalCheckbox.checked) {
            price = parseFloat(selectedPrice) + parseFloat(selectedOption.dataset.price_car);
        } else {
            price = parseFloat(selectedPrice);
        }
        priceInput.value = price.toFixed(2);
    }

    destinationSelect.addEventListener('change', updatePrice);
    carRentalCheckbox.addEventListener('change', updatePrice);
    updatePrice();
</script>

</body>
<?php $conn->close(); ?>

</html>