<?php
@$name = $_POST['name'];
@$pass = md5($_POST['pass']);
if(!isset($_POST['name'])&&!isset($_POST['pass'])) {
//Visitor needs to enter a name and password
?>
<!DOCTYPE html>
<html>
<head>
<title>onlinefilms</title>

</head>
    <center>
<body>
<table>
     <tr>
    <td colspan="2"><img src="logo2.jpg" width="1220" height="150"></td>
   </tr>

    <tr>
    <td width="300" align="center" bgcolor="#FFEFD5"><h1>Sign In Here</h1><br></br>

      <form action="index.php" method="post" >

      	<h2 align="center">Login Form</h2>
      <table align="center">
      	<tr>
      	<td><label>Username:</label></td>
          <td> <input type="text" name="name" required></td>
      </tr>
      <tr>
      	<td><label>Password:</label></td>
      <td><input type="password" name="pass"required></td>
      </tr>
      		<tr>
      		<td><input type="submit" name="submit" value="Login"></td>
      	</tr>
      </table>

      </form>
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
      $row =mysqli_fetch_array($result,MYSQLI_BOTH);
      //echo $count;
      //echo $pass;
      //exit();
      /*$_SESSION['Admin'] = '$Admin';
      $_SESSION['Client'] = '$Client';
      $_SESSION['Employee'] = '$Employee';*/

      //$type = $_GET['Type'];
      if($count>0) {

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

  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    <td><img src="picha1.jpg" height="418"> <img src="happy2.jpg" width="285" height="418"></td>
    </tr>

     <tr>
    <td colspan="2" align="center">© copyrighyt 2019<br>
        <p>Made by programmers group number one<br>
        Godwin Prosper.<br>
        Elnes Karoma.<br>
        Happy Boniface.<br>
        Godlove Mark.<br>
        Saul G. jackson.
        <br><br>
         Class DM14
        </p>

        </td>
    </tr>

</table>

</body>
        </center>
</html>
