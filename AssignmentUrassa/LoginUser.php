<?php
session_start();
$db = mysqli_connect('localhost','root','','FilmDB');
if(!$db){
	echo "Error connecting";
}
if (isset($_POST["submit"])) {
    $username= $_POST["Username"];
    $password=md5 ($_POST["Password"]);

    $query = "SELECT * FROM users WHERE UserName='$username' AND Password= '$password'";
    $result = mysqli_query($db, $query);
		$row = $result->fetch_assoc();
$_SESSION['Type'] = $row['Type'];

if ($_SESSION['Type'] === "Employee") {
    echo '<div>';
    echo ' <button><a href="FilmRegistration.php">Register Film</a></button>';
    echo ' </div>';
	//	if (@mysqli_num_rows($result) == 1) {
      //  while ($row = $result->fetch_assoc()) {
          //  $_SESSION['type'] = $row['UserType'];

				echo "Employee to login!!!";
      // header("location:profile.php");
    //}
	}
	 if ($_SESSION['Type'] === "Admin") {
	    echo '<div>';
	    echo ' <button><a href="Registration.php">Register Employee</a></button>';
	    echo ' </div>';
				echo "Admin to login!!!";
	}

//  else {

  //  	echo "Failed to login!!!";
//}


 if ($_SESSION['Type'] === "client") {
		echo '<div>';
		echo ' <button><a href="Registration.php">Register Employee</a></button>';
		echo ' </div>';
			echo "Admin to login!!!";
}
}
?>
