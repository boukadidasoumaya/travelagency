<?php
require '../countries/bdd.php';
$cnx = CBD::getInstance();

class home_countries
{
    private $data = array();


    function __construct()
    {

        $cnx = CBD::getInstance();

        $query = "select * from `countries_home`";
        $response = $cnx->query($query);
        $this->data = $response->fetchAll(\PDO::FETCH_ASSOC);
    }



    function get_countries()
    {
        $countries = array();
        $cnx = CBD::getInstance();

        $query = "select * from `countries_home` ;";
        $response = $cnx->query($query);
        $countries = $response->fetchAll(\PDO::FETCH_ASSOC);
        return $countries;
    }
}