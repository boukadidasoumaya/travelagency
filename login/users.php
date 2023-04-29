<?php
require('../countriesfinal/bdd.php');
$cnx = CBD::getInstance();

class users
{

    protected PDO $cnx;

    public function __construct()
    {
        $this->cnx = CBD::getInstance();
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



    public function update_user($user_id, $new_info)
    {


        $query = "UPDATE `user` SET `user_name` = ?,`user_last_name`=?, `email` = ?, `password` = ?, `birthday` = ?, `country` = ?, `city` = ?, `passport` = ? WHERE `user_id` = $user_id";
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

        if ($stmt->rowCount() == 0) {
            throw new Exception("User with ID $user_id does not exist.");
        }
    }

    public function delete_user($user_id)
    {
        $query = "DELETE FROM `user` WHERE `user_id` = ?";
        $stmt = $this->cnx->prepare($query);
        $stmt->execute([$user_id]);
    }
}
