
?php 
Class Comments{
public $id = null;
public $pageurl = null;
public $name = null;
public $email = null;
public $website = null;
public $comment = null;
public function __construct($data=array()){
if(isset($data['id']))$this->id=int($data['id']);
if(isset($data['name']))$this->name=$data['name'];
if(isset($data['email']))$this->email=$data['email'];
if(isset($data['pageurl']))$this->pageurl=$data['pageurl'];
if(isset($data['pageurl']))$this->pageurl=$data['pageurl'];
if(isset($data['pageurl']))$this->pageurl=$data['pageurl'];

}
}

$action=isset($ction)?$_GET['action']:"";
?>
<?php 
if($action)){
Comments::getComments($action);
foreach($row as $row){}
if($_POST['savecomments']){
$comments=new Comments();
$comments->storeForm($_POST);
$comments->insertComments($action);
Comments::getComments($action);
foreach($row as $row){
echo "<ul>";
}
}
}
?>









