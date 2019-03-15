<?php echo"<center>
<table cellspacing= 30% cellpadding= 3 bgcolor = cyan>
  <tr><th><a href=main.php>HOME</a></th></tr>
  </table></center>" ?>
<?php
session_start();

@$uname = $_POST['uname'];
@$upass = $_POST['upass'];
if(!$uname||!$upass) {

//capture data

// load form

?>

<center><form action = "login2.php" method = "post">
<table><tr><td>User Name</td>
<td><input type = "text" name = "uname"></td></tr>
<tr><td>Password</td>
<td><input type = "password" name = "upass"></td></tr>
<td><input type = "submit" name = "submit" value = "Login"></td>
<td><input type = "Reset" value = "Reset"></td></tr>
</table></form>
</center>
<?php
echo $_SESSION['err'];
unset($_SESSION['err']);
}else {
$conn = new mysqli('localhost','root','','FilmDB') ;
 if(!$conn) {
 $_SESSION['err']="Connection Fail";
header("Location:login2.php");
exit();
}
//$conn->select_db(FilmDB);

$upass = md5($upass);
$sql = "SELECT * FROM users WHERE UserName ='$uname' AND Password ='$upass'";
$result=$conn->query($sql);

if(!$result) {
$_SESSION['err']=$conn->error;
header("Location:login2.php");
exit();
}
$num = mysqli_num_rows($result);
if($num ==0) {
$_SESSION['err']="Incorrect user name or Password";
header("Location:login2.php");
exit();
}
$row = mysqli_fetch_array($result);
if($row['Type']==='client'){
$_SESSION['utype']= $row['Type'];
header("Location:profile.php");
exit();
 }
else {
$_SESSION['utype']= 'employee';
header("Location:employee_pro.php");
exit(); }

}


?>
