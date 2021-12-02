
?php 
Class Comments{
public $id = null;
public $pageurl = null;
public $name = null;
public $email = null;
public $website = null;
public $comment = null;
public static $message= "";
public function __construct($data=array()){
if(isset($data['id']))$this->id=int($data['id']);
if(isset($data['pageurl']))$this->pageurl=$data['pageurl'];
if(isset($data['name']))$this->name=$data['name'];
if(isset($data['email'])){if(filter_var($data['email'],FILTER_VALIDATE_EMAIL)){$this->email=$data['email'];}
else{self::$message="invalid email";}}
if(isset($data['website'])){if(filter_var($data['website'],FILTER_VALIDATE_URL)){$this->website=$data['website'];}else{
self::$message="invalid website";}}
if(isset($data['comment']))$this->commennt=$data['comment'];
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









