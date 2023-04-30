<?php
require('../countriesfinal/bdd.php');
$cnx = database::getInstance();

class users
{

    protected PDO $cnx;

    public function __construct()
    {
        $this->cnx = database::getInstance();
    }
    public function verify_accountByname($user_name, $password)
    {

        $query = "select * from `user` where user_name=? AND password=? ;";
        $response = $this->cnx->prepare($query);
        $response->execute([$user_name, $password]);
        $user = $response->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function verify_accountByemail($email, $password)
    {

        $query = "select * from `user` where email=? AND password=? ;";
        $response = $this->cnx->prepare($query);
        $response->execute([$email, $password]);
        $user = $response->fetch(PDO::FETCH_ASSOC);
        return $user;
    }



    public function get_users()
    {
        $users = array();
        /*  $cnx = CBD::getInstance(); */

        $query = "select * from `user` ;";
        $response = $this->cnx->prepare($query);
        $response->execute([]);
        $users = $response->fetchAll(\PDO::FETCH_ASSOC);
        return $users;
    }
    public function get_user_by_id($user_id)
{
    $query = "SELECT * FROM `user` WHERE `user_id` = ?";
    $stmt = $this->cnx->prepare($query);
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

    public function create($POST)
    {
        $user_name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $passport = $_POST['passport'];



        $query = "INSERT INTO `user` (user_name, user_last_name,email,password,date_birth, country, city, num_passport) 
                VALUES (?, ?, ?, ?, ?, ?, ? , ?)";
        $response = $this->cnx->prepare($query);
        $response->execute([$user_name, $lastname, $email, $password, $birthday, $country, $city, $passport]);
    }



public function update_user($vars) 
  {
    $this->user_name = $vars['name'];
    $this->user_last_name = $vars['lastName'];
    $this->date_birth = $vars['birthday'];
    $this->country = $vars['country'];
    $this->city = $vars['city'];
    $this->email = $vars['email'];
    $this->num_passport = $vars['passport'];


    $cnx = CBD::getInstance();
    $query = "UPDATE  `user` SET `user_name`='$this->user_name', `user_last_name`= '$this->user_last_name',`email`='$this->email',`date_birth`='$this->date_birth',`country`='$this->country',`city`='$this->city',`num_passport`='$this->num_passport'  where country_id=$this->country_id ;";
    $response = $cnx->query($query);
  }

    public function delete_user($user_id)
    {
        $query = "DELETE FROM `user` WHERE `user_id` = ?";
        $stmt = $this->cnx->prepare($query);
        $stmt->execute([$user_id]);
    }
}
