<?php include('service.php'); ?>
<!DOCTYPE HTML>
<Html>
<head><title>REGISTER</title></head>
<center>
<body>
  <h1>Register Form</h1>
<form method="post"  action="Register.php">
  <?php include('error.php'); ?>
FirstName:<input type="Text" Name="Fname" ></br></br>
LastName:<input type="Text" Name="Lname"></br></br>
UserName:<input type="Text" Name="Uname"></br></br>
Password:<input type="password" Name="Password_1"></br></br>
Confirm Password:<input type="password" Name="Password_2"></br></br>
E-Mail:<input type="email" Name="Email"></br></br>
User Type<select name="utype">
<option  value="Employee">Employee</option>
<option value="Client">Client</option>
</select></br></br>
<input type='submit' name='Register_User' value='Register'><br/></br>
<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
</form>
</body>
</center>
</Html>
