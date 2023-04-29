<?php
// Get the selected country ID and car rental option from the form
$countryId = $_POST["destination"];
$carRental = isset($_POST["car_rental"]) ? 1 : 0;

// Get the price of the selected country from the database
$sql = "SELECT price_trip, price_tour_guide, price_car FROM country WHERE country_id = $countryId";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$price = $row["price_trip"] + $row["price_tour_guide"];

// Add the price of the car rental if the checkbox is checked
if ($carRental) {
    $price += $row["price_car"];
}

// Update the booking record with the total price
$sql = "UPDATE booking SET prix = $price WHERE id_reservation = " . $_POST["id_reservation"];
$conn->query($sql);
