<form action='test.php' methode='post'>
<input type="file" name='img' name='dird'>
<button type="submit" >
<html>
<?php
$filename = $_FILES['dird']["name"];

$tempname = $_FILES['dird']["tmp_name"];  

    $folder = "img/".$filename;   

// connect with the database
$id=$vars['country_id'];

    // query to insert the submitted data

   //// $sql = "UPDATE `country`
   // set `$target`='$filename' 
   // where country_id=$id";

    // function to execute above query

    // Add the image to the "image" folder"
    
    if (move_uploaded_file($tempname,$folder)) {

        $msg = "Image uploaded successfully";

    }else{

        $msg = "Failed to upload image";

}
require('bdd.php');

$location="../countriesfinal/img/";
  

      $country_id=$vars['country_id'];
       $country_name=$vars['country_name'];

        $population=$vars['population'];

         $climate=$vars['climate'];
          $currency=$vars['currency'];
           $history=$vars['history'];
            $hero_src=$location.'/'.$country_id.'hero_src'.$country_name;
             $cta_src=$location.'/'.$country_id.'cta_src'.'sfsdf.png';
            $about_src=$location.'/'.$country_id.'about_src'.$country_name;
               $services_src=$location.'/'.$country_id.'services_src'.$vars['services_src'];
                $contact_src=$location.'/'.$country_id.'contact_src'.$vars['contact_src'];;
                 $pic1=$location.'/'.$country_id.'pic1'.$vars['pic1'];
                 $pic2=$location.'/'.$country_id.'pic2'.$vars['pic2'];
                 $pic3=$location.'/'.$country_id.'pic3'.$vars['pic3'];
                 require_once('storeimg.php');
                 $dbimg= new storeimg('img/69/');
                 $dbimg->deleteimg($id);
?>
<img src=<?=$cta_src?> width="500" height="600">


</html> 