<?php require( "config.php");?>

<?php 
//to select comments for a page from database
$action=isset($ction)?$_GET['action']:"";
if($action)){
$comments=new Comments();
$comments->selectsComments($action);}

}
?>
