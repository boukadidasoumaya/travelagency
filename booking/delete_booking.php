
<?php
include 'bdd.php';
//access deletedid from the url of the page:start:
if (isset($_GET['deletedid'])){
    $id_reservation=$_GET['deletedid'];
    //end access.
//delete query:
$sql="delete from `booking` where id_reservation=$id_reservation";
//execute this query:
$result=mysqli_query($conn,$sql);

if($result){
    //header to refresh the page after deleting the trip.
header('location:edit_booking.php'); 
}else{
    die(mysqli_error($conn));
}

}



  ?>