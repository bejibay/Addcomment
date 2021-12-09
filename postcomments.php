<?php require( "config.php");?>
<?php 
$action=isset($ction)?$_GET['action']:"";
if($action)){
$comments=new Comments;
$comments->storeFormValues();
$comments->postComments();
}
?>









