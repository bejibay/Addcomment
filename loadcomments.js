function loadComments(){
var xhr=new XMLHttpRequest();
xhr.onload=function(){
document.getElementById("loadcomments").innerHTML=
xhr.responseText;
}
xhr.open("GET","selectcomments.php", true);
xhr.send();
}

