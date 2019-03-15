<html>
<head><title></title></head>
<style type = "text/css">

form {
  text-align: right;

}

a:link {
  text-decoration: none;
}
dive1{
  align-content: center;
}


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
}
li {
    float: left;
    text-align:center;

}

a {
    display: block;
    width: 60px;
}



</style>




    <!-- Navbar Right Menu-->
    <ul>
      <li><a href="login.php">Home</a></li>
      <li><a href="Admin.php">User Profile</a></li>
      <li><a href="Employee.php"> Register Employee</a></li>
      <li><a href="list.php"> Add Film</a></li>
      <li><a href="filmviewA.php">View all Films</a></li>

    </ul>




      <!-- User Menu-->

<form method="post" action="service.php">


<input type="submit" name="logout" value="logout">

</form>


  </header>


<body>


<?php
$db = mysqli_connect('localhost', 'root', '','FilmDB');
$results=$db->query("SELECT * FROM users");
//$results=$db->query("DELETE * FROM users WHERE FirstName=$firstname");
 ?>

<Center><div style="dive1">  <table cellspacing=1 cellpadding=8 border='1'>
    <tr>

<th >FirstName</th>
<th >LastName</th>
<th >UserName</th>
<th >Email</th>
<th>Password</th>
<th>Type</th>
</tr>
</center>

<?php while($row=$results->fetch_assoc()):?>
<tr>
  <td><?php echo $row['FirstName'];?></td>
    <td><?php echo $row['LastName'];?></td>
    <td><?php echo $row['UserName'];?></td>
    <td><?php echo $row['Email'];?></td>
    <td><?php echo $row['Password'];?></td>
    <td><?php echo $row['Type'];?></td>
</tr>
<?php endwhile;?>
</table>
</div>


</body>
</html>
