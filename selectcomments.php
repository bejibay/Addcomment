//this script is to select comments for a page from
Database

<?php 
$action=isset($ction)?$_GET['action']:"";
if($action)){
$comments=new Comments();
$comments->selectsComments($action);}

}
?>
