<? php
session_start();

$Username="";
$Password="";

$conn = new mysqli('localhost','root',''){
if(!$conn){
die("connecion Fail");
}

$Username=mysqli_real_escape_string($connect,$_Post["Username"]);
$Password=mysqli_real_escape_string($connect,$_Post["Password "])








 ?>
