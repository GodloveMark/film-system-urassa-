<?php

if (isset($_POST['Register_Employee'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['Fname']);
  $lastname = mysqli_real_escape_string($db, $_POST['Lname']);
  $username = mysqli_real_escape_string($db, $_POST['Uname']);
  $email = mysqli_real_escape_string($db, $_POST['Email']);
  $utype = mysqli_real_escape_string($db, $_POST['utype']);
  $password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);

  // form validation: ensure that the form is correctly filled ...

if (empty($firstname)) { array_push($errors, "firstname is required"); }
if (empty($lastname)) { array_push($errors, "lastname is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  // by adding (array_push()) corresponding error unto $errors array
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  


  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE UserName='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['UserName'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $email) {
      array_push($errors, "email already exists");
    }
  }





  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (FirstName,LastName,UserName, Email, Password,Type)
  			  VALUES('$firstname','$lastname','$username', '$email', '$password','$utype')";
  	mysqli_query($db, $query);
  	$_SESSION['UserName'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: Admin.php');
  }}





 ?>
