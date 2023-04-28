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
}
