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
    public function verify_account($user_name)
    {

        $query = "select * from `user` where user_name=? ;";
        $response = $this->cnx->prepare($query);
        $response->execute([$user_name]);
    }
    public function create($POST )
    {
        $user_name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $passport = $_POST['passport'];

        if ($this->verify_account($user_name)) {
            throw new Exception("User already exists");
        }
       
        $query = "INSERT INTO `user` (user_name, user_last_name,email,password,date_birth, country, city, num_passport) 
                VALUES (?, ?, ?, ?, ?, ?, ? , ?)";
        $response = $this->cnx->prepare($query);
        $response->execute([$user_name, $lastname, $email, $password, $birthday, $country, $city, $passport]);
    }


    
    public function update_user($user_id, $new_info)
    {   

        //$new_info hya new values passed as parameters juste na9es na3mlo page ily bech ybadel mineha admin paramaters mta3 users

        if (!$this->is_admin()) {
            throw new Exception("You do not have permission to modify user accounts.");
        }

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
    {   $query = "DELETE FROM `user` WHERE `user_id` = ?";
        $stmt = $this->cnx->prepare($query);
        $stmt->execute([$user_id]);
    }

    
}