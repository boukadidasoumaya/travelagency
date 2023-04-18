<?php
require 'bdd.php';
    $cnx=CBD::getInstance();



class Persistence {
  private $data = array();
  
  function __construct() {
    $cnx=CBD::getInstance();

$query="select * from `comments`;";
$response=$cnx->query($query);
$this->data=$response->fetch(PDO::FETCH_ASSOC);
    //if( isset($_SESSION['blog_comments']) == true ){
      
      //  $this->data = $_SESSION['blog_comments'];
    
  } 
  
  /**
   * Get all comments for the given post.
   */
  function get_comments($comment_post_ID) {
    $comments = array();
   // if( isset($this->data[$comment_post_ID]) == true ) {
      //$comments = $this->data[$comment_post_ID];
    //}
    $cnx=CBD::getInstance();
    $query="SELECT * FROM `comments` WHERE comment_post_ID=$comment_post_ID;";
    $response=$cnx->query($query);
    $comments = $response->fetchAll(\PDO::FETCH_ASSOC);

    return $comments;
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
    
    $comment_post_ID = $vars['comment_post_ID'];
    $input = array(
     'comment_author' => $vars['comment_author'],
     'content' => $vars['content'],
     'comment_post_ID' => $comment_post_ID,
     'date' =>date("Y/m/d"));
     $comment_author= $vars['comment_author'];
     $user_last_name = $vars['user_last_name'];
     $content =$vars['content'];
      $comment_post_ID=$vars['comment_post_ID'];
    $query="INSERT INTO `comments` (`comment_author`, `user_last_name`, `content`, `comment_post_ID`) VALUES ('$comment_author','$user_last_name','$content ', '$comment_post_ID');";
    
   // if($this->validate_input($input) == true) {
     // if( isset($this->data[$comment_post_ID]) == false ) {
       // $this->data[$comment_post_ID] = array();
      //}
      
     /*  $input['id'] = uniqid('comment_'); */
$cnx= CBD::getInstance();
     $response=$cnx->query($query);
     
      
      $this->sync();
      
      $added = $input;
    
    return $added;
  }
  
  function delete_all() {
    $query="DELETE FROM `comments`";
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
  
  
  private function validate_input($input) {
    $input['email'] = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($input['email'], FILTER_VALIDATE_EMAIL) == false) {
      return false;
    }
    
    $input['comment_author'] = substr($input['comment_author'], 0, 70);
    if($this->check_string($input['comment_author']) == false) {
      return false;
    }
    $input['comment_author'] = htmlentities($input['comment_author']);

    $input['comment'] = substr($input['comment'], 0, 300);
    if($this->check_string($input['comment'], 5) == false) {
      return false;
    }
    $input['comment'] = htmlentities($input['comment']);

    $input['comment_post_ID'] = filter_var($input['comment_post_ID'], FILTER_VALIDATE_INT);  
    if (filter_var($input['comment_post_ID'], FILTER_VALIDATE_INT) == false) {
      return false;
    }

    return true;
  }
  
  private function check_string($string, $min_size = 1) {
    return strlen(trim($string)) >= $min_size;
  }
}

?>