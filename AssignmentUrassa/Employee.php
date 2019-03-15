<?php include('service.php'); ?>
<!DOCTYPE HTML>
<Html>
<head><title>REGISTER</title>
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    text-align:center;

  }
  a {
      display: block;
      width: 60px;
  }
  li {
      display: inline;
      float: left;
  }
}




  </style>
</head>
<center>
<body>
  <ul>
    <li><a href="login.php">Home</a></li>
    <li><a href="employee_pro.php">User Profile</a></li>
    
    <li><a href="list.php"> Add Film</a></li>
    <li><a href="Registeredfilms.php">View all Films</a></li>

  </ul>

<h1 text-align=center>Register Form</h1>
<form method="post"  action="Employee.php">
  <?php include('error.php'); ?>
FirstName:<input type="Text" Name="Fname" ></br></br>
LastName:<input type="Text" Name="Lname"></br></br>
UserName:<input type="Text" Name="Uname" ></br></br>
Password:<input type="password" Name="Password_1"  ></br></br>
Confirm Password:<input type="password" Name="Password_2" ></br></br>
E-Mail:<input type="email" Name="Email" ></br></br>
User Type<select name="utype">
<option value="Employee">Employee</option>
<option value="Client">Client</option>
</select></br></br>
<input type="submit" name="Register_Employee" value="Register"/><br/></br>
<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
</form>
</body>
</center>
</Html>
