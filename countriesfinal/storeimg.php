<?php
class storeimg {

/* private $target_dir = "img/";
private $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
private $uploadOk = 1;
private $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
function __construct($vars)
{
    $this->target_dir = "img/";
 $this->target_file = $this->target_dir . basename($_FILES["fileToUpload"]["name"]);
 $this->uploadOk = 1;
 $this->imageFileType = pathinfo($this->target_file,PATHINFO_EXTENSION);


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
}}
?>
</body>
</html> */ }?>