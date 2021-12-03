
<?php 
$action=isset($ction)?$_GET['action']:"";
if($action)){
$comments=new Comments();
$comments->selectsComments($action);}

}
?>









