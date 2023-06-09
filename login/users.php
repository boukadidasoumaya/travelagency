<?php
require_once('../countriesfinal/bdd.php');
$cnx = CBD::getInstance();

class users
{

    protected PDO $cnx;
    private  $user_id;
    private $user_name;
    private $lastname;
    private $password;
    private $email;
    private $birthday;
    private $country;
    private $city;
    private $passport;
    private $hashed_password;
    private $photo_profil;

    public function __construct()
    {
        $this->cnx = CBD::getInstance();
    }
    public function getCnx()
    {
        return $this->cnx;
    }
    public function find_user_by_email($email)
    {

        $query = "select * from `user` where email=? ;";
        $response = $this->cnx->prepare($query);
        $response->execute([$email]);
        $user = $response->fetch(PDO::FETCH_ASSOC);
        return $user['user_id'];
    }
    public function verify_accountByname($user_name)
    {

        $query = "select * from `user` where user_name=? ;";
        $response = $this->cnx->prepare($query);
        $response->execute([$user_name]);
        $user = $response->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function verify_accountByemail($email)
    {

        $query = "select * from `user` where email=?  ;";
        $response = $this->cnx->prepare($query);
        $response->execute([$email]);
        $user = $response->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function verify_accountByemail_motdepasse_oublie($email)
    {

        $query = "select * from `user` where email=?  ;";
        $response = $this->cnx->prepare($query);
        $response->execute([$email]);
        $user = $response->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function motdepasse_oublie($id, $password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "update user set password= ? where user_id=?";
        $response = $this->cnx->prepare($query);
        $response->execute([$hashed_password, $id]);
    }


    function get_users()
    {
        $users = array();
        /*  $cnx = CBD::getInstance(); */

        $query = "select * from `user` ;";
        $response = $this->cnx->prepare($query);
        $response->execute([]);
        $users = $response->fetchAll(\PDO::FETCH_ASSOC);
        return $users;
    }
    function get_users_by_id($id)
    {
        $user = array();


        $query = "select * from `user` where user_id=? ;";
        $response = $this->cnx->prepare($query);
        $response->execute([$id]);
        $user = $response->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    function get_reservation($id)
    {
        $reservation = array();


        $query = "SELECT * from booking
        inner join user on booking.user_id=user.user_id
        where booking.user_id=?;";
        $response = $this->cnx->prepare($query);
        $response->execute([$id]);
        $reservation = $response->fetchAll(\PDO::FETCH_ASSOC);
        return $reservation;
    }

    public function create($POST)
    {
        $user_name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $passport = $_POST['passport'];


        //verifier si il existe

        $query = "INSERT INTO `user` (user_name, user_last_name,email,password,date_birth, country, city, num_passport) 
                VALUES (?, ?, ?, ?, ?, ?, ? , ?)";
        $response = $this->cnx->prepare($query);
        $response->execute([$user_name, $lastname, $email, $hashed_password, $birthday, $country, $city, $passport]);
        header("Location: sign in.php");
    }

    public function update_userprofil_photo($user_id, $vars)
    {


        $this->photo_profil = $_FILES['photo_profil']['name'];
        $query = "UPDATE `user` SET photo_profil= ? WHERE `user_id` = ?";
        $stmt = $this->cnx->prepare($query);

        $stmt->execute([
            $this->photo_profil,
            $user_id,

        ]);
    }

    public function update_user($user_id, $new_info)
    {


        $query = "UPDATE `user` SET `user_name` = ?,`user_last_name`=?, `email` = ?, `password` = ?, `date_birth` = ?, `country` = ?, `city` = ?, `num_passport` = ? WHERE `user_id` = $user_id";
        $stmt = $this->cnx->prepare($query);

        $stmt->execute([
            $new_info['user_name'],
            $new_info['user_last_name'],
            $new_info['email'],
            $new_info['password'],
            $new_info['birthday'],
            $new_info['country'],
            $new_info['city'],
            $new_info['passport'],
        ]);

       
    }
    public function update_userprofil($user_id, $new_info)
    {


        $query = "UPDATE `user` SET `user_name` = ?,`user_last_name`=?,`date_birth`=? , `email` = ?,  `country` = ?, `city` = ?, `num_passport` = ? WHERE `user_id` = $user_id";
        $stmt = $this->cnx->prepare($query);

        $stmt->execute([
            $new_info['user_name'],
            $new_info['user_last_name'],
            $new_info['birthday'],
            $new_info['email'],
            $new_info['country'],
            $new_info['city'],
            $new_info['passport'],
        ]);

        
    }

    public function delete_user($user_id)
    {
        $query = "DELETE FROM `user` WHERE `user_id` = ?";
        $stmt = $this->cnx->prepare($query);
        $stmt->execute([$user_id]);
    }
    public function update_img($user_id,$vars){
        $sql="UPDATE `user` SET `photo_profil`='$vars' WHERE `user_id`=$user_id";
        $cnx=CBD::getInstance();
        $result=$cnx->query($sql);
    }

}
