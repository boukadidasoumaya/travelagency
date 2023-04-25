


<?php
require('../countries/bdd.php');
$cnx = CBD::getInstance();
require('generate_country_file.php');
class home_countries
{
  protected $cnx;
  private  $country_id, $name, $expectation,
    $population, $climate, $currency, $history, $price_car, $pricetg, $pricetrip, $imgfolder;

  public function __construct()
  {
    $this->cnx = CBD::getInstance();
    /*  $query = "INSERT INTO `country` (`country_id`, `country_name`, `expectation`, `population`,`climate`,`currency`,`history`,`price_car`,`price_trip`,`price_tour_guide`,`photo_for_home`) VALUES ('$this->country_id','$this->name', '$this->expectation', '$this->population','$this->climate','$this->currency','$this->history','$this->price_car','$this->pricetrip','$this->pricetg','$this->imgfolder');";
        $response = $cnx->query($query); */
  }




  function get_countries()
  {
    $countries = array();
    /*  $cnx = CBD::getInstance(); */

    $query = "select * from `country` ;";
    $response = $this->cnx->prepare($query);
    $response->execute([]);
    $countries = $response->fetchAll(\PDO::FETCH_ASSOC);
    return $countries;
  }



  function tellme()
  {
    return $this->country_id;
  }


  function findById($id)
  {
    $query = "select * from `country` where id= ? ;";
    $response = $this->cnx->prepare($query);
    $response->execute([$id]);
    return $response->fetch(PDO::FETCH_OBJ);
  }
  function delete_country($country_id)
  {

    $delete_query = "delete from country where country_id= ?";
    $response = $this->cnx->prepare($delete_query);
    $response->execute([$country_id]);
  }


  function addcountry($vars)
  {
    $this->country_id = $vars['country_id'];
    $this->name = $vars['countryname'];
    $this->expectation = $vars['expectation'];
    $this->population = $vars['population'];
    $this->climate = $vars['climate'];
    $this->currency = $vars['currency'];
    $this->history = $vars['history'];
    $this->price_car = $vars['price_car'];
    $this->pricetg = $vars['pricetg'];
    $this->pricetrip = $vars['pricetrip'];
    $this->imgfolder = $vars['imgfolder'];
    $cnx = CBD::getInstance();

    $cnx = CBD::getInstance();
    $query = "INSERT INTO `country` (`country_id`, `country_name`, `expectation`, `population`,`climate`,`currency`,`history`,`price_car`,`price_trip`,`price_tour_guide`,`photo_for_home`) VALUES ('$this->country_id','$this->name', '$this->expectation', '$this->population','$this->climate','$this->currency','$this->history','$this->price_car','$this->pricetrip','$this->pricetg','$this->imgfolder');";
    $response = $cnx->query($query);
    $file = new generate_country_file($this->country_id, $this->name,  $this->population, $this->climate, $this->currency, $this->history, $this->expectation);
    $txt = $file->get_file();
    return $txt;
  }
}
?>

   
