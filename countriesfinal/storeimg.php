<?php
require_once 'bdd.php';
require_once '../login/users.php';
class storeimg
{

    private $location;
    private $target_file;
    private $uploadOk = 1;
    private $imageFileType;
    function __construct($loc)
    {
        $this->location = $loc;
    }
    function storeim($vars, $target, $cid)
    {


        $msg = "";

        // check if the user has clicked the button "UPLOAD" 
        //img/

        $filename = $_FILES[$target]["name"];

        $tempname = $_FILES[$target]["tmp_name"];
        $pos = strrpos($filename, '.');
        $ext = substr($filename, $pos);
        $folder = $this->location . $filename;



        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";
            rename($folder, $this->location . "" . $target . $cid . "" . $filename);
        } else {

            $msg = "Failed to upload image";
        }
    }

    function verify($vars, $location)
    {


        $uploadOk = 1;
        $this->imageFileType = pathinfo($this->target_file, PATHINFO_EXTENSION);




        // Check file size
        if ($vars["fileToUpload"]["size"] > 500000) {
            echo "<center>Sorry, your file is too large.</center>";
            $uploadOk = 0;
        }
        // Allow certain file formats

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<center>Sorry, your file was not uploaded.</center>";
            // if everything is ok, try to upload file
        }
        return $uploadOk;
    }
    function deleteimg($id)
    {
        if (!is_dir($this->location)) {
            throw new InvalidArgumentException("$this->location must be a directory");
        }
        if (substr($this->location, strlen($this->location) - 1, 1) != '/') {
            $this->location .= '/';
        }
        $files = glob($this->location . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteimg($file);
            } else {
                unlink($file);
            }
        }
        rmdir($this->location);
    }
    function delete_photo_profil($user_id)
    {
        $user = new users();
        $user_img = $user->get_users_by_id($user_id);
        $file = $this->location . "fileInput" . $user_id . $user_img['photo_profil'];
        unlink($file);
    }
}


?>
</body>

</html>