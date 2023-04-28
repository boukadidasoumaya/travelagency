


<?php
require('bdd.php');
$cnx = CBD::getInstance();
require('storeimg.php');

require('generate_country_file.php');
class countries
{
  protected $cnx;
  private  $country_id, $country_name, $expectation,
    $population, $climate, $currency, $history, $price_car, $pricetg, $pricetrip, $imgfolder, $hero_src, $cta_src, $about_src, $services_src, $contact_src;

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
    $query = "select * from `country` where country_id= ? ;";
    $response = $this->cnx->prepare($query);
    $response->execute([$id]);
    return $response->fetch(PDO::FETCH_ASSOC);
  }
  function delete_country($country_id)
  {

    $delete_query = "delete from  `country` where country_id= ?";
    $response = $this->cnx->prepare($delete_query);
    $response->execute([$country_id]);
  }


  function addcountry($vars)
  {
    $this->country_id = $vars['country_id'];
    $this->country_name = $vars['countryname'];
    $this->expectation = $vars['expectation'];
    $this->population = $vars['population'];
    $this->climate = $vars['climate'];
    $this->currency = $vars['currency'];
    $this->history = $vars['history'];
    $this->price_car = $vars['price_car'];
    $this->pricetg = $vars['pricetg'];
    $this->pricetrip = $vars['pricetrip'];
    $this->imgfolder = $vars['imgfolder'];
    $this->hero_src = $_FILES['hero_src'];
    $this->cta_src = $vars['cta_src'];
    $this->about_src = $vars['about_src'];
    $this->services_src = $vars['services_src'];
    $this->contact_src = $vars['contact_src'];

    $query = "INSERT INTO `country` (`country_id`, `country_name`,  `population`,`climate`,`currency`,`history`,`price_car`,`price_trip`,`price_tour_guide`,`photo_for_home`,`hero_src`,`cta_src`,`about_src`,`services_src`,`contact_src`) VALUES ('$this->country_id','$this->country_name', '$this->population','$this->climate','$this->currency','$this->history','$this->price_car','$this->pricetrip', '$this->pricetg','$this->imgfolder','$this->hero_src','$this->cta_src','$this->about_src','$this->services_src','$this->contact_src');";
    $response = $this->cnx->query($query);
    $file = new generate_country_file($this->country_id, $this->country_name,  $this->population, $this->climate, $this->currency, $this->history, $this->hero_src, $this->cta_src, $this->about_src, $this->services_src, $this->contact_src);

    $txt = $file->get_file();
    return $txt;
  }


  function updatecountry($vars)
  {
    $this->country_id = $vars['country_id'];
    $this->country_name = $vars['countryname'];

    $this->population = $vars['population'];
    $this->climate = $vars['climate'];
    $this->currency = $vars['currency'];
    $this->history = $vars['history'];
    $this->price_car = $vars['price_car'];
    $this->pricetg = $vars['pricetg'];
    $this->pricetrip = $vars['pricetrip'];
    $this->imgfolder = $vars['imgfolder'];


    $cnx = CBD::getInstance();
    $query = "UPDATE  `country` SET `country_id`='$this->country_id', `country_name`='$this->country_name', `population`= '$this->population',`climate`='$this->climate',`currency`='$this->currency',`history`='$this->history',`price_car`='$this->price_car',`price_trip`='$this->pricetrip',`price_tour_guide`='$this->pricetrip',`photo_for_home`='$this->imgfolder' where country_id=$this->country_id ;";
    $response = $cnx->query($query);
  

  }
}
?>