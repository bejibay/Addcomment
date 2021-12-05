<?php require("config.php");?>

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
$conn = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
$sql = " INSERT INTO commentstable(pageurl,name, email,website,comment,ip,pubdate)
VALUES(:pageurl,:name,:website,:comment,:ip,:pubdate)";
$stm = $conn->prepare($sql);
$stm-bindValue(":pageurl",$this->pageurl,PDO::PARAM_STR);
$stm-bindValue(":name",$this->name,PDO::PARAM_STR);
$stm-bindValue(":email",$this->email,PDO::PARAM_STR);
$stm-bindValue(":website",$this->website,PDO::PARAM_STR);
$stm-bindValue(":comment",$this->comment,PDO::PARAM_STR);
$stm-bindValue(":ip",$this->ip,PDO::PARAM_INT);
$stm-bindValue(":pubdate",$this->pubdate,PDO::PARAM_INT)
$stm->execute();
$conn->null;
}
public function selectComments($entries){
$conn = new PDO(DSN,USERNAME,PASSWORD,DBASE);
$sql = "SELECT* FROM commentstable where pageurl=:pageurl";
$stm = $conn->prepare($sql);
$stm->bindValue(":pageurl",$this->pageurl, PDO::PARAM_STR);
}
}
?>











