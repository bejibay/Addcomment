
?php 
Class Comments{
public $id = null;
public $pageurl = null;
public $name = null;
public $email = null;
public $website = null;
public $comment = "";
public $ip     = "";
public static $message= "";
public function __construct($data=array()){
if(isset($data['id']))$this->id=int($data['id']);
if(isset($data['pageurl']))$this->pageurl=$data['pageurl'];
if(isset($data['name']))$this->name=$data['name'];
if(isset($data['email'])){if(filter_var($data['email'],FILTER_VALIDATE_EMAIL)){$this->email=$data['email'];}
else{self::$message="invalid email";}}
if(isset($data['website'])){if(filter_var($data['website'],FILTER_VALIDATE_URL)){$this->website=$data['website'];}else{
self::$message="invalid website";}}
if(isset($data['comment']))$this->comment=$data['comment'];
}
public function storeFormData($formparam){
$this->__construct($param);
}
public function insertComments($urlparam){
$conn = new PDO(DSN,USERNAME,PASSWORD,DBASE);
$sql = " INSERT INTO commentTable(pageurl,name, email,website,comment,ip)
VALUES(:pageurl,:name,:website,:comment,:ip)";
$stm = $conn->prepare($sql);
$stm-bindValue(:pageurl,$this->pageurl,PDO_PARAM_STR);
$stm-bindValue(:name,$this->name,PDO_PARAM_STR);
$stm-bindValue(:email,$this->email,PDO_PARAM_STR);
$stm-bindValue(:website,$this->website,PDO_PARAM_STR);
$stm-bindValue(:comment,$this->comment,PDO_PARAM_STR);
$stm-bindValue(:ip,$this->ip,PDO_PARAM_INT);
$stm->execute();
$conn-null;

}
}

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









