
<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 }  
include_once 'bdd.php';
$cnx=CBD::getInstance();
  /*if connected
  */

  
  $authorized='true';
  $receiving_comment ="hello";

  $_SESSION['cmt']=$_POST['message'];
   $_POST['name']="tr";
 $id=2575;
 echo '<p>'.$_POST['message'].'</p>';

  $query="SELECT * FROM `booking` ";

  $RESPONSE=$cnx->query($query);
  $row = $RESPONSE ->fetch(PDO::FETCH_ASSOC);

  if(isset($RESPONSE)){

    $_SESSION['status']=true;
  }else
  $_SESSION['status']=false;

function comment(){
  if(
    $_SESSION['status']){ 
    echo'<div class="col-lg-6" id ="commentaire">
    <form action="C:\Users\sapph\OneDrive\Documents\GitHub\travelagency\countries\forms\contact.php" method="post" role="form" class="comentaires">
      
      <div class="row">
        <div class="col-md-6 form-group">
         
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="comment" required></textarea>
      </div>
      
     
      <div class="text-center" id="combut"><button  type="submit">post comment</button></div>
    </form>
  </div>
</div>
</div>';
   
}else{
    echo '<div class="col-lg-6" id ="commentaire">
    <form action="C:\Users\sapph\OneDrive\Documents\GitHub\travelagency\countries\forms\contact.php" method="post" role="form" class="comentaires">
      
      <div class="row">
        <div class="col-md-6 form-group">
         
      <div class="form-group mt-3">
        <textarea class="form-control" readonly name="message" rows="5" placeholder="comment" required></textarea>
      </div>
      
      <div class="text-center" id="combut"><button  type="submit" disabled>post comment</button></div>
      <div class="alert alert-danger" role="alert">
  please sign up!
</div>
    </form>
  </div>
</div>
</div>';
} 
} 
function addingcomment(){

};
?> 


