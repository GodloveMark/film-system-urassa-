<!--login script-->
<?php
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['Uname']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE UserName='$username' AND Password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results)===1) {
  	  $_SESSION['Uname'] = $username;
       $_SESSION['Password'] = $password;
  	 // $_SESSION['success'] = "You are now logged in";
  	  header('location: profile.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }}


?>
