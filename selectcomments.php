<?php require( "config.php");?>
<?php 
$action=isset($ction)?$_GET['action']:"";
if($action){
$comments=new Comments;
$comments->selectComments($action);
foreach($row as $value){
echo "<ul>";
echo "<li>".$value['name']."</li>";
echo "<li>".$value['comment']."</li>";
echo "</ul>";
}
}
?>
