<?php require( "config.php");?>
<?php 
$action=isset($ction)?$_GET['action']:"";
if($action){
$comments=new Comments;
$comments->storeFormData($_POST);
$comments->postComments();
}
?>
<?php include "commentsform.php";?>








