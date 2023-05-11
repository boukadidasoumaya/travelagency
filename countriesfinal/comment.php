<?php
require_once 'bdd.php';

    $cnx=CBD::getInstance();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

class Persistence {
  private $data = array();
  function __construct() {
    $cnx=CBD::getInstance();

$query="select * from `comments`;";
$response=$cnx->query($query);
$this->data=$response->fetch(PDO::FETCH_ASSOC);
    
    
  } 
  
  /**
   * Get all comments for the given post.
   */
  function get_comments($comment_post_ID) {
    $comments = array();
   
    $cnx=CBD::getInstance();
    $query="SELECT * FROM `comments` LEFT JOIN `user` ON comments.user_id=user.user_id  WHERE comment_post_ID=$comment_post_ID ; ";
    $response=$cnx->query($query);
    $comments = $response->fetchAll(\PDO::FETCH_ASSOC);

    return $comments;
  }
  function count(){

  }
  function get_users_byid($id)
    {
        $user = array();
        $cnx=CBD::getInstance();


        $query = "select * from `user` where user_id=? ;";
        $response = $cnx->prepare($query);
        $response->execute([$id]);
        $user = $response->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
  /**
   * Get all comments.
   */
  function get_all_comments() {
    return $this->data;
  }
  
  /** 
   * Store the comment.
   */
  function add_comment($vars) {
    
    $added = false;
    $user=array();
    $comment_post_ID = $vars['comment_post_ID'];
    $content = $vars['content'];

  $user=$this->get_users_byid($vars['user_id']);
  $id=$user['user_id'];
 
    $query="INSERT INTO `comments` ( `content`, `comment_post_ID`,`user_id` ) VALUES ('$content ', '$comment_post_ID','$id');";
  
  
$cnx= CBD::getInstance();
     $response=$cnx->query($query);
     if ($response){
      $this->sync();
      return true;
     }
      
      
      
      
    
    return false ;
  }
  
  function delete_all() {
    $query="DELETE FROM `comments`";
    $cnx= CBD::getInstance();
     $response=$cnx->query($query);
     
    $this->sync();
  }
  function delete($id) {
    $query="DELETE FROM `comments` where com_id=$id";
    $cnx= CBD::getInstance();
     $response=$cnx->query($query);
     
    $this->sync();
  }
  
  private function sync() {
    $cnx= CBD::getInstance();
    $query="SELECT * FROM `comments` ";
    $response=$cnx->query($query);
    $this->data=$response->fetch(PDO::FETCH_ASSOC);
}
  
  

  private function check_string($string, $min_size = 1) {
    return strlen(trim($string)) >= $min_size;
  }
  function delete_user_comment($user_id){

    $sql="DELETE FROM `comments` WHERE `user_id`=$user_id";

  }
}

?>