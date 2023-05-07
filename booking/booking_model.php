<?php
require_once('bdd.php');

class Booking
{
    private $id_reservation;
    private $trip_date;
    private $price;
    private $user_id;
    private $destination;
    private $conn;

    public function __construct()
    {
        $this->conn = CBD::getInstance();
    }

    public function setIdReservation($id_reservation)
    {
        $this->id_reservation = $id_reservation;
    }

    public function setTripDate($trip_date)
    {
        $this->trip_date = $trip_date;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    public function createBooking()
    {
        $sql = "SELECT * FROM booking where user_id=" . $_POST['user'] . " AND date='" . $this->trip_date . "'";
        $result = $this->conn->query($sql);

        $booking = $result->fetch(PDO::FETCH_OBJ);
        if ($booking == false) {

            $sql = "INSERT INTO booking VALUES (null, '$this->trip_date', $this->price, $this->user_id, $this->destination)";
            if ($this->conn->query($sql)) {
                return true;
            } else {
                return false;
            }
        } else {
            header("Location: booking.php");
        }
    }

    public function readBooking($booking_id)
    {
        $sql = "SELECT * FROM booking WHERE id_reservation = $booking_id";
        $result = $this->conn->query($sql);
        return $result->fetch();
    }

    public function updateBooking($booking_id)
    {
        $sql = "UPDATE booking SET id_reservation = '$this->id_reservation', trip_date = '$this->trip_date', price = '$this->price', 
                user_id = '$this->user_id', destination = '$this->destination' WHERE id_reservation = $booking_id";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteBooking($booking_id)
    {
        $sql = "DELETE FROM booking WHERE id_reservation = $booking_id";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
    public function get_clients()
    {
        $clients = array();

        $sql = "SELECT * FROM `booking` inner join `user` ;";
        $resultat = $this->conn->prepare($sql);
        $resultat->execute([]);
        $clients = $resultat->fetchAll(\PDO::FETCH_ASSOC);
        return $clients;
    }

    public function get_reservation($id)
    {
        $reserv = array();

        $sql = "SELECT * FROM `user` inner join `booking` where user.user_id=$id;";
        $resultat = $this->conn->prepare($sql);
        $resultat->execute([]);
        $reserv = $resultat->fetchAll(\PDO::FETCH_ASSOC);
        return $reserv;
    }
}
