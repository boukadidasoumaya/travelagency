<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{

    // Page header
    function Header()
    {

        // Set font family to Arial bold
        $this->SetFont('Arial', 'B', 20);

        // Move to the right
        $this->Cell(80);

        // Header
        $this->Cell(50, 10, 'Receipt', 1, 0, 'C');

        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {

        // Position at 1.5 cm from bottom
        $this->SetY(-15);

        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);

        // Page number
        $this->Cell(0, 10, 'Page ' .
            $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

require('bdd.php');
require('booking_model.php');

$conn = CBD::getInstance();

$booking = new Booking($conn);

$booking->setTripDate($_POST['trip-date']);
$booking->setPrice($_POST['price']);
$booking->setUserId($_POST['user']);
$booking->setDestination($_POST['destination']);

// save to database
$booking->createBooking();

// prepare data for PDF file
$sql = "SELECT * FROM user where user_id=" . $_POST['user'] . "";
$result = $conn->query($sql);

$user = $result->fetchObject();

$sql = "SELECT * FROM country where country_id=" . $_POST['destination'] . "";
$result = $conn->query($sql);

$destination = $result->fetchObject();

// Instantiation of FPDF class
$pdf = new PDF();

// Define alias for number of pages
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 14);

$pdf->Cell(40, 10, 'Fullname : ' . $user->user_name . ' ' . $user->user_last_name);
$pdf->Ln();

$pdf->Cell(40, 10, 'Passport Number : ' . $user->num_passport);
$pdf->Ln();

$pdf->Cell(40, 10, 'Destination : ' . $destination->country_name);
$pdf->Ln();

$pdf->Cell(40, 10, 'Total Cost Price : ' . $_POST['price']);
$pdf->Ln();

$pdf->Output();
