<?php
  session_start();

//  if (!isset($_SESSION['username'])) {
  //	$_SESSION['msg'] = "You must log in first";
  //	header('location: Login.php');
//  }
  if (isset($_POST['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: Login.php");
  }
?>



<!--<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

</head>
<body>



<h2>Home Page</h2>


  	<!-- notification message -->
  	<//?php if (isset($_SESSION['success'])) : ?>

  <//h3>
          <//?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	<//h3>

  	<//?php endif ?>

    <!-- logged in user information -->
    <//?php  if (isset($_SESSION['username'])) : ?>
  <!--  	<p>Welcome <strong><//?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <//?php endif ?>


</body>
</html>-->
