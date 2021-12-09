<?php require( "config.php");?>

<?php 
//to select comments for a page from database
$action=isset($ction)?$_GET['action']:"";
if($action)){
$comments=new Comments();
$comments->selectsComments($action);}

}
?>
<?php require( "config.php");?>
<?php 
$action=isset($ction)?$_GET['action']:"";
if($action)){
$comments=new Comments;
$comments->selectComments($action);
foreach($row as $value){
echo "<ul>";
echo "<li>$row['name']</li>";
echo "<li>$row['comment']</li>";
echo "</ul>";
}
}
?>
