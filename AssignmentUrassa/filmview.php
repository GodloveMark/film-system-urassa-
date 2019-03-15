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
    <li><a href="profile.php">User Profile</a></li>
    <li><a href="Registeredfilms.php">View all Films</a></li>

  </ul>

  <a  href="login.php"> Logout</a>


</right>
</html>



<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

$link = mysqli_connect("localhost", "root", "", "FilmDB");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM film WHERE Title LIKE '%" . $valueToSearch .  "%'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table align=center cellspacing=12>";

            echo "<tr>";

                echo  "<th>FilmId</th>";
            echo  " <th>Title</th>";
            echo  " <th>Producer</th>";
            echo  " <th>Sponsor</th>";
              echo"<th>City</th>";
              echo  "<th>Theme</th>";
            echo  "<th>Year of Production</th>";
            echo  "<th>Price</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Film_Id'] . "</td>";
                echo "<td>" . $row['Title'] . "</td>";
                echo "<td>" . $row['Producer'] . "</td>";
                echo "<td>" . $row['Sponsor'] . "</td>";
                echo "<td>" . $row['City'] . "</td>";
                echo "<td>" . $row['Theme'] . "</td>";
                echo "<td>" . $row['Year'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
}
?>
