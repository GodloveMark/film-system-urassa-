<?php 
$name = $_POST['name'];
$pass = md5($_POST['pass']); 
if(!isset($_POST['name'])&&!isset($_POST['pass'])) { 
//Visitor needs to enter a name and password 
?> 
<center>
<form>
    <h1>FILM MANAGEMENT</h1>
    
</form>

<h1>Please Log In</h1> 
<form method="post" action="index.php"> 
    <table> 
        <tr> <th> Username </th> 
        <td> <input type="text" name="name"> </td> </tr> 
        <tr> <th> Password </th> 
        <td> <input type="password" name="pass"> </td> </tr> 
        <tr> <td colspan="2" align="center">
        
    <input type="submit" value="Log In"> </br>
    I don't have an account
    <a href="roja.html"> <b><i> Register</i></b> </a></td></tr> 
    </table> </form> 
    
</center>

<?php 
session_start();
}
else { 
// connect to mysql 
$mysql = mysqli_connect("localhost", "root", ""); 
if(!$mysql) {
echo 'Cannot connect to database.'; 
exit; 
}
$_SESSION['con'] = $mysql;
// select the appropriate database 
$selected = mysqli_select_db($mysql, "onlinereg"); 
if(!$selected) {
echo 'Cannot select database.'; 
exit; 
} 
// query the database to see if there is a record which matches 
$query = "select * from user where UserName = '$name' and Passwords = '$pass'"; 
$result = mysqli_query($mysql, $query);
 
if(!$result) {
    echo 'Cannot run query.';
//header("Location:film.html");
    //echo <a href="filmHome.php"></a>;
exit; 
}
$count = mysqli_num_rows($result); 
//echo $count;
//echo $pass;
//exit();
/*$_SESSION['Admin'] = '$Admin';
$_SESSION['Client'] = '$Client';
$_SESSION['Employee'] = '$Employee';*/
$type = $_POST['Type'];
if($count>0) {
    if($type='Admin'){

        header("Location:client.html");
    }
    elseif ($type='Client') {
        header("Location:cliview.php");
    }
    elseif($type='Employee'){
        header("Location:filmHome.html");
    }
    
// visitor’s name and password combination are correct 

}
else { 
// visitor’s name and password combination are not correct 
echo '<h1>Username or Passwords incorrect!</h1>'; 
echo '<h2>You are not authorized.</h2>';
//header("Location:client.html"); 
} 
}
?>