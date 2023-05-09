<?php
require_once('comment.php');
if (!isset($_SESSION)) {
    session_start();
}
$db = new Persistence();
$id = htmlspecialchars($_POST['com_id']);
$db->delete($id);
header( 'Location: prototype.php?id='.$_POST['cou_id']);