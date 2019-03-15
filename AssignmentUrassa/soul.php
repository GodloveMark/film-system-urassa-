
<?php include ('service.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>onlinefilms</title>
    <link rel="stylesheet" type="text/css" href="souly.css">
</head>
    <center>
<body>
<table>
     <tr>
    <td colspan="2"><img src="logo2.jpg" width="1220" "height="150"></td>
   </tr>

    <tr>
    <td width="300" align="center" bgcolor="#FFEFD5"><h1>Sign In Here</h1><br><br>
    <form  action="soul.php" method= "POST">
        	<?php include('error.php'); ?>
        	<div class="input-group">
        		<label>Username</label>
        		<input type="text" name="Uname" >
        	</div>
        	<div class="input-group">
        		<label>Password</label>
        		<input type="password" name="Password">
        	</div>
        	<div class="input-group">
        		<button type="submit" class="btn" name="login_user">Login</button>
        	</div>        <p>Not a member? Click a Register to sign up</p>

        <a href="Register.php">REGISTER</a>

        </td>
    <td><img src="picha1.jpg" height="418"> <img src="happy2.jpg" width="285" height="418"></td>
    </tr>

     <tr>
    <td colspan="2" align="center">© copyrighyt 2019<br>
        <p>Made by programmers group number one<br>
        Godwin Prosper.<br>
        Elnes Karoma.<br>
        Happy Boniphas.<br>
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
