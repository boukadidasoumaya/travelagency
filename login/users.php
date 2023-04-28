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
}
