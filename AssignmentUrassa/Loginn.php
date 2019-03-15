<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<div id="Navbar">
	<nav>
	<ul>
		    <li><a href="index.php">Home</a></li>
			<li><a href="Registration.php">Register</a></li>
			<li><a href="Login.php">Login</a></li>
	</ul>

	</nav>
</div>
<form action="LoginUser.php" method="post" >
	<h2 align="center">Login Form</h2>
<table align="center">
	<tr>
	<td><label>Username:</label></td>
    <td> <input type="text" name="Username" placeholder="Username" required></td>
</tr>
<tr>
	<td><label>Password:</label></td>
<td><input type="Password" name="Password" placeholder="Password" required></td>
</tr>
		<tr>
		<td><input type="submit" name="submit" value="Login"></td>
	</tr>
</table>
<p align="center">Not a member yet?<a href="Registration.php">Sign Up</a></p>
</form>
</body>
</html>