<?php require("config.php");

if(isset($_GET['pageurl'])){
$pageurl = $_GET['pageurl'];
$results = array();
$comments=new Comments;
$results['articles'] = $comments->selectComments($pageurl);
foreach($results['articles'] as $value){
echo "<ul>";
echo "<li>".$value->name."</li>";
echo "<li>".$value->comment."</li>";
echo "</ul>";
}
}
?>
