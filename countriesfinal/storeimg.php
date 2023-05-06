<?php
require_once 'bdd.php';
class storeimg {

private $target_dir ;
private $target_file;
private $uploadOk = 1;
private $imageFileType ;
 function __construct()
{}
function storeim($vars,$target,$location){
    if($this->verify($vars,$location)==1){
    $msg = ""; 

// check if the user has clicked the button "UPLOAD" 
//img/

    $filename = $_FILES[$target]["name"];

    $tempname = $_FILES[$target]["tmp_name"];  

        $folder = $location.$filename;   

    // connect with the database
    $id=$vars['country_id'];

        // query to insert the submitted data

       //// $sql = "UPDATE `country`
       // set `$target`='$filename' 
       // where country_id=$id";

        // function to execute above query

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }}}

 function verify ($vars,$location){

    $this->target_dir = $location;
 $this->target_file = $this->target_dir . basename( $vars["fileToUpload"]["name"]);
 $this->uploadOk = 1;
 $this->imageFileType = pathinfo($this->target_file,PATHINFO_EXTENSION);
//rename("img/$filename","img/$target.png");
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "";
        $uploadOk = 1;
    } else {
        echo "<center>File is not an image.</center>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($this->target_file)) {
    echo "<center>Sorry, file already exists.</center>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<center>Sorry, your file is too large.</center>";
    $uploadOk = 0;
}
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<center>Sorry, your file was not uploaded.</center>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $this->target_file)) {
        echo "<center><i><h4>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</h4></i></center>";
    } else {
        echo "<center>Sorry, there was an error uploading your file.</font></center>";
    }}
return $uploadOk;}
function deleteimg($img,$location){
    if (file_exists($this->target_file)) {
        unlink($location.$img);
}

}
}
?>
</body>
</html> 