<?php
require_once('bdd.php');
if (!isset($_SESSION)) {
    session_start();
}
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
    public function check_date($vars)
    {
        $this->trip_date = $vars['trip-date'];
        $sql = "SELECT * FROM booking where user_id=" . $vars['user'] . " AND date='" . $this->trip_date . "'";
        $result = $this->conn->query($sql);
        $booking = $result->fetch(PDO::FETCH_OBJ);
        if ($booking == false) {
            return false; //mich mawjouda
        } else {
            return true; //mawjouda
        }
    }
    public function createBooking($vars)
    {
        /* $sql = "SELECT * FROM booking where user_id=" . $vars['user'] . " AND date='" . $this->trip_date . "'";
        $result = $this->conn->query($sql); */
        $this->trip_date = $vars['trip-date'];
        $this->price = $vars['price'];
        $this->user_id = $vars['user'];

        /*      $id = $vars['destination_id']; */

        /*tunisia:5 --> implode(explode(:)) $resultat = explode($separateur, $chaine);

// $resultat est maintenant un tableau contenant les sous-chaînes séparées
$sousChaine1 = $resultat[0]; // Première sous-chaîne
$sousChaine2 = $resultat[1];  */
        $destination1 = explode(':', $vars['destination']);
        $id = $destination1[1];
        $dest = $destination1[0];


        /*  $booking = $result->fetch(PDO::FETCH_OBJ); */

        $sql = "INSERT INTO booking VALUES (null, ?, ?, ?, ?,?)";
        $response = $this->conn->prepare($sql);
        $response->execute([$this->trip_date, $this->price, $this->user_id, $id, $dest]);
    }

    public function readBooking($booking_id)
    {
        $sql = "SELECT * FROM booking WHERE id_reservation = ?";
        $response = $this->conn->prepare($sql);
        $response->execute($booking_id);
        return $response->fetch();
    }

    public function updateBooking($id_user, $country_name, $id_country, $vars)
    {
        $this->id_reservation = $vars['id'];
        $this->trip_date = $vars['date'];


        if ($id_country != 0) { /*partie admin */
            $this->price = $vars['price'];
            $sql = "UPDATE booking SET date = ? , prix=? , destination=?,destination_name=? , user_id=?   WHERE id_reservation =? ";

            $response = $this->conn->prepare($sql);
            $response->execute([$this->trip_date, $this->price, $id_country, $country_name, $id_user, $this->id_reservation]);
        } else {
            $sql = "UPDATE booking SET  date = ? WHERE id_reservation =? ;UPDATE user SET  email=? ,num_passport=? WHERE user_id=?";

            $response = $this->conn->prepare($sql);
            $response->execute([$this->trip_date, $this->id_reservation, $vars['email'], $vars['passport'], $id_user]);
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

        $sql = "SELECT * FROM `booking` inner join `user` on booking.user_id=user.user_id  where user.user_id=? order by booking.id_reservation asc ;";
        $resultat = $this->conn->prepare($sql);
        $resultat->execute([$user_id]);
        $reserv = $resultat->fetchAll(\PDO::FETCH_ASSOC);
        return $reserv;
    }
    public function get_reservation_byone($user_id)
    {
        $reserv = array();

        $sql = "SELECT * FROM `booking` inner join `user` on booking.user_id=user.user_id  where booking.id_reservation=? order by booking.id_reservation asc ;";
        $resultat = $this->conn->prepare($sql);
        $resultat->execute([$user_id]);
        $reserv = $resultat->fetch(PDO::FETCH_ASSOC);
        return $reserv;
    }
    function get_countries()
    {
        $countries = array();


        $query = "select * from `country` ;";
        $response = $this->conn->prepare($query);
        $response->execute([]);
        $countries = $response->fetchAll(\PDO::FETCH_ASSOC);
        return $countries;
    }
    function get_countriesbyname($country_name)
    {
        $countries = array();


        $query = "select * from `country` where country_name=?;";
        $response = $this->conn->prepare($query);
        $response->execute([$country_name]);
        $countries = $response->fetch(PDO::FETCH_ASSOC);
        return $countries['country_id'];
    }

    function get_users_byid($id)
    {
        $user = array();


        $query = "select * from `user` where user_id=? ;";
        $response = $this->conn->prepare($query);
        $response->execute([$id]);
        $user = $response->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}