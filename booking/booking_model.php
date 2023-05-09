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

    public function createBooking($vars)
    {
        $sql = "SELECT * FROM booking where user_id=" . $vars["user"] . " AND date='" . $this->trip_date . "'";
        $result = $this->conn->query($sql);
        $this->user_id = $vars['user'];
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

    public function updateBooking($vars)
    {
        $this->id_reservation = $vars['id'];
        $this->trip_date = $vars['date'];
        $this->$vars['destination'];

        $sql = "UPDATE booking SET  date = '$this->trip_date' WHERE id_reservation ='$this->id_reservation '";
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

        $sql = "SELECT * FROM booking inner join user on booking.user_id=user.user_id inner join country on country.country_id=booking.destination order by booking.id_reservation asc ;";
        $resultat = $this->conn->prepare($sql);
        $resultat->execute([]);
        $clients = $resultat->fetchAll(\PDO::FETCH_ASSOC);
        return $clients;
    }

    public function get_reservation($user_id)
    {
        $reserv = array();

        $sql = "SELECT * FROM `booking` inner join `user` on booking.user_id=user.user_id inner join country on country.country_id=booking.destination  where user.user_id=? order by booking.id_reservation asc ;";
        $resultat = $this->conn->prepare($sql);
        $resultat->execute([$user_id]);
        $reserv = $resultat->fetchAll(\PDO::FETCH_ASSOC);
        return $reserv;
    }
    public function get_reservation_byone($user_id)
    {
        $reserv = array();

        $sql = "SELECT * FROM `booking` inner join `user` on booking.user_id=user.user_id inner join country on country.country_id=booking.destination  where booking.id_reservation=? order by booking.id_reservation asc ;";
        $resultat = $this->conn->prepare($sql);
        $resultat->execute([$user_id]);
        $reserv = $resultat->fetch(PDO::FETCH_ASSOC);
        return $reserv;
    }
}
