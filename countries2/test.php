
<html>
<?php
require 'Persistence.php';
$cnx=CBD::getInstance();
$query ="INSERT INTO `comments` (`comment_author`, `user_last_name`, `content`, `comment_post_ID`, `date`) VALUES ('mabahej', 'benhassine', 'wow ', '62', '4/17/2023');";
            $response=$cnx->query($query);/*
            $query ="INSERT INTO `comments` (`comment_author`, `user_last_name`, `content`, `comment_post_ID`, `date`) VALUES ('soumaya', 'boukadida', 'its fun ', '62', '4/18/2023');";

            $response=$cnx->query($query);
            $query ="INSERT INTO `comments` (`comment_author`, `user_last_name`, `content`, `comment_post_ID`, `date`) VALUES ('maj', 'besine', 'truly amazing ', '62', '4/17/2023');";
            $response=$cnx->query($query);*/
 /* $query="SELECT * from `comments` WHERE comment_author='soumaya' ;";
$response=$cnx->query($query);
$data=$response->fetch(PDO::FETCH_ASSOC);?>
<ol id="posts-list" class="hfeed">
  <li class="no-comments">Be the first to add a comment.</li>
  <?php $db = new Persistence();
$comment_post_ID = 62;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
  
    foreach ($comments as $comment) {
      ?>
      <li><article id="comment_<?php echo($comment['com_id']); ?>" class="hentry">
        <footer class="post-info">

          <address class="vcard author">
            
            By <a class="url fn" href="#"><?php echo($comment['comment_author'].','.$comment['user_last_name']); ?></a>
          </address>
        </footer>

        <div class="entry-content">
          <p><?php echo($comment['content']); ?></p>
        </div>
      </article></li>
      <?php };
     
  ?>
</ol> 
</html> */
//$myfile = fopen("newfile.php", "w"); 
//$txt = "<?php echo hello?>";

?>      <!-- result it's fun -->