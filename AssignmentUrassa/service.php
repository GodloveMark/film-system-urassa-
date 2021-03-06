
 <?php
session_start();

// initializing variables
$firstname="";
$lastname="";
$username = "";
//$password="";
$email    = "";
$utype="";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '','FilmDB');

// REGISTER USER
if (isset($_POST['Register_User'])) {
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

//restrict employee from register online
  if ($utype==="Employee") {
    array_push($errors, "Client Only");
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
  //	$_SESSION['UserName'] = $username;
  //	$_SESSION['success'] = "You are now logged in";
  echo "you are registered";
  header('location: profile.php');
  }
  else{
    echo"You not registered";
  }
}
?>








<!--logout session-->
<?php


if (isset($_POST['logout'])) {
 //$_SESSION['msg'] = "You must log in first";
  session_destroy();
  unset($_SESSION['username']);
  header("location: Login.php");
}
?>


<!-- Employee Registration-->


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

  $success=mysqli_query($db, $query);
  //	$_SESSION['UserName'] = $username;
  if($success){
  //	$_SESSION['success'] = "You are now logged in";
  echo"Employee Registered";
  	header('location: Admin.php');
}
else{
  echo"failed to register";
}  }
}


 ?>




<!--Register film-->

<?php

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '','FilmDB');

// REGISTER FILM
if (isset($_POST['Submit'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $producer = mysqli_real_escape_string($db, $_POST['producer']);
  $sposor = mysqli_real_escape_string($db, $_POST['sposor']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $theme = mysqli_real_escape_string($db, $_POST['theme']);
  $year = mysqli_real_escape_string($db, $_POST['year']);
  $price= mysqli_real_escape_string($db, $_POST['price']);


  // form validation: ensure that the form is correctly filled ...

if (empty(  $title)) { array_push($errors, "Title is required"); }
if (empty($producer)) { array_push($errors, "producer is required"); }
  if (empty($sposor)) { array_push($errors, "sponsor is required"); }
  if (empty($city)) { array_push($errors, "city is required"); }
  if (empty($theme)) { array_push($errors, "theme is required"); }
  if (empty($year)) { array_push($errors, "year is required"); }
  if (empty($price)) { array_push($errors, "price is required"); }

//STORE VALUES INTO DATABASE
  	$query = "INSERT INTO film (Title,Producer,Sponsor,City,Theme,Year,Price)
  			  VALUES('$title','$producer','$sposor', '$city', '$theme','$year','$price')";
  	$result=mysqli_query($db, $query);
    if($result){
  		echo " Registering is Successfully";
  	}
      else{
          echo " Registering failed";
      }
  header('location: list.php');
  }
?>
