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

    <input type="submit" name='submit'value="Log In"> </br>
    I don't have an account
    <a href="Register.php"> <b><i> Register</i></b> </a></td></tr>
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
//$_SESSION['con'] = $mysql;
// select the appropriate database
$selected = mysqli_select_db($mysql, "FilmDB");
if(!$selected) {
echo 'Cannot select database.';
exit;
}
// query the database to see if there is a record which matches
$query = "select * from users where UserName = '$name' and Password = '$pass'";
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

//$type = $_GET['Type'];
if($count>0) {
  $row =mysqli_fetch_array($result,MYSQLI_BOTH);
  $_SESSION['Type'] = $row['Type'];
    if($_SESSION['Type'] === "Admin"){

        header("Location:Admin.php");
    }
    elseif ($_SESSION['Type'] === "Client") {
        header("Location:profile.php");
    }
    elseif($_SESSION['Type'] === "Employee"){
        header("Location:employee_pro.php");
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
