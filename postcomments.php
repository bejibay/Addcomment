<?php require "config.php" ;
if(isset($_GET['pageurl'])){
if(isset($_POST['post comments'])){
$comments=new Comments;
$comments->storeFormData($_POST);
$comments->postComments();
<?php require "commentsform.php" ;
}
}
?>








