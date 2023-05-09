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

$cnx=CBD::getInstance();
unlink('../countriesfinal/img/bali1.jpg')

?>

</html> 