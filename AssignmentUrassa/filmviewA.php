<html>
<head><title></title>
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
      float: left;
      text-align:center;
      display: inline;

  }




  </style>
</head>
<right>
<body>
  <ul>
    <li><a href="login.php">Home</a></li>
    <li><a href="Admin.php">User Profile</a></li>
    <li><a href="Employee.php"> Register Employee</a></li>
    <li><a href="list.php"> Add Film</a></li>
    <li><a href="filmviewA.php">View all Films</a></li>

  </ul>



  <a  href="login.php"> Logout</a>


</right>



<form method="post" action="service.php">



</form>


  </header>


<body>


<?php
$db = mysqli_connect('localhost', 'root', '','FilmDB');
$results=$db->query("SELECT * FROM film");
//$results=$db->query("DELETE * FROM users WHERE FirstName=$firstname");
 ?>

<Center><div style="dive1">  <table cellspacing=1 cellpadding=8 border='1'>
    <tr>

<th >Film_Id</th>
<th >Title</th>
<th >Producer</th>
<th >Sponsor</th>
<th>City</th>
<th>Theme</th>
<th>Year</th>
<th>Price</th>
</tr>
</center>

<?php while($row=$results->fetch_assoc()):?>
<tr>
  <td><?php echo $row['Film_Id'];?></td>
    <td><?php echo $row['Title'];?></td>
    <td><?php echo $row['Producer'];?></td>
    <td><?php echo $row['Sponsor'];?></td>
    <td><?php echo $row['City'];?></td>
    <td><?php echo $row['Theme'];?></td>
    <td><?php echo $row['Year'];?></td>
    <td><?php echo $row['Price'];?></td>
</tr>
<?php endwhile;?>
</table>
</div>







</body>
</html>
