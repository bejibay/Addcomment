//this script us to select comments for a page from
Database
<?php
<div class ="formcomments"></div>
?>
<?php 
$action=isset($ction)?$_GET['action']:"";
if($action)){
if($_POST['savecomments']){
$comments=new Comments();
$comments->storeFormData($_POST);
$comments->insertComments($action);}
if($_POST['cancelcomments']){include 'commentsform.php';}
else{include 'commentsform.php';}
}
?>