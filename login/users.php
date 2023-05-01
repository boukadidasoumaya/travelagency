<?php
require('../countriesfinal/bdd.php');
$cnx = database::getInstance();

class users
{

    protected PDO $cnx;
    private  $user_id;
    public function __construct()
    {
        $this->cnx = database::getInstance();
    }
    public function find_user_by_email($email)
    {

        $query = "select * from `user` where email=? ;";
        $response = $this->cnx->prepare($query);
        $response->execute([$email]);
        $user = $response->fetch(PDO::FETCH_ASSOC);
        return $user['user_id'];
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
        $query = "update user set password= ? where user_id=?";
        $response = $this->cnx->prepare($query);
        $response->execute([$password, $id]);
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

    $this->user_id = $vars['id'];
    $this->user_name = $vars['name'];
    $this->user_last_name = $vars['lastname'];
    $this->date_birth = $vars['birthday'];
    $this->country = $vars['country'];
    $this->city = $vars['city'];
    $this->email = $vars['email'];
    $this->num_passport = $vars['passport'];


    $cnx = CBD::getInstance();
    $query = "UPDATE  `user` SET `user_name`='$this->user_name', `user_last_name`= '$this->user_last_name',`email`='$this->email',`date_birth`='$this->date_birth',`country`='$this->country',`city`='$this->city',`num_passport`='$this->num_passport'  where user_id=$this->user_id ;";
    $response = $cnx->query($query);
  
   /*     $stmt->execute([
            $new_info['user_name'],
            $new_info['user_last_name'],
            $new_info['email'],
            $new_info['password'],
            $new_info['birthday'],
            $new_info['country'],
            $new_info['city'],
            $new_info['passport'],
        ]);

        if ($stmt->rowCount() == 0) {
            throw new Exception("User with ID $user_id does not exist.");
        }*/
    }

    public function delete_user($user_id)
    {
        $query = "DELETE FROM `user` WHERE `user_id` = ?";
        $stmt = $this->cnx->prepare($query);
        $stmt->execute([$user_id]);
    }
}
