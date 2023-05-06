<?php
require('comment.php');

$db = new Persistence();
$db->add_comment($_POST) ;

  $k='Location: prototype.php?id='.$_POST['comment_post_ID'].' nj' ;
  var_dump($k);
  header( 'Location: prototype.php?id='.$_POST['comment_post_ID']);

//  header( 'Location: prototype.php?id='.$_POST['comment_post_ID'].'?error=Your comment was not posted due to errors in your form submission' );

?>