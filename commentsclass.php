<?php require("config.php");
$message = "";
class Comments{
public $id = null;
public $pageurl = null;
public $name = null;
public $email = null;
public $website = null;
public $comment = null;
public $ip     = "";
public function __construct($data=array()){
global $message;
if(isset($data['id']))$this->id=int($data['id']);
if(isset($data['pageurl']))$this->pageurl=$data['pageurl'];
if(isset($data['name'])){$this->name=$data['name'];}
else{$message = "Your name cannot be empty";}
if(isset($data['email']) && filter_var($data['email'],FILTER_VALIDATE_EMAIL)){$this->email=$data['email'];}
else{$message="invalid email";}
if(isset($data['website']) && filter_var($data['website'],FILTER_VALIDATE_URL)){$this->website=$data['website'];}
else{$message="invalid website";}
if(isset($data['comment'])){$this->comment=$data['comment'];}
else{$message= " Comments cannot be empty";}
}

public function storeFormData($param){
$this->__construct($param);
if(isset($param['pubdate'])){
$pubdate = explode('-',$param['pubdate']);
if(count($pubdate)==3){
list($y,$m,$d)=$pubdate;
$this->pubdate = mktime(0,0,0,$m,$d,$y);
}
}
}
public function insertComments(){
$conn = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
$sql = " INSERT INTO commentstable(pageurl,name, email,website,comment,ip,pubdate)
VALUES(:pageurl,:name,:website,:comment,:ip,:pubdate)";
$stm = $conn->prepare($sql);
$stm->bindValue(":pageurl",$this->pageurl,PDO::PARAM_STR);
$stm->bindValue(":name",$this->name,PDO::PARAM_STR);
$stm->bindValue(":email",$this->email,PDO::PARAM_STR);
$stm->bindValue(":website",$this->website,PDO::PARAM_STR);
$stm->bindValue(":comment",$this->comment,PDO::PARAM_STR);
$stm->bindValue(":ip",$this->ip,PDO::PARAM_INT);
$stm->bindValue(":pubdate",$this->pubdate,PDO::PARAM_INT);
$stm->execute();
$conn->null;
}

public function selectComments($urlparam){
$conn = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
$sql = "SELECT* FROM commentstable where pageurl=:pageurl";
$stm = $conn->prepare($sql);
$stm->bindValue(":pageurl",$urlparam, PDO::PARAM_STR);
$stm->execute();
$conn = null;
$row = $stm->fetchAll();
if($row) return new Comments($row);
}
}
?>
