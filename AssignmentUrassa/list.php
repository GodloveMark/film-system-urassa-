<?php include ('service.php'); ?>
<!Doctype>
<html>
<head>
<title>list of item</title>
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


</head>
<body>

  <ul>
    <li><a href="login.php">Home</a></li>
    <li><a href="Admin.php">User Profile</a></li>
    <li><a href="Employee.php"> Register Employee</a></li>
    <li><a href="list.php"> Add Film</a></li>
    <li><a href="filmviewA.php">View all Films</a></li>

  </ul>


    <center>
<form method="post" action="list.php">
    <h4><center>  REGISTER FILM </center></h4>
Title:   <input type="text" name="title"/><br><br>
Producer: <input type="text"name="producer"/><br><br>
Sponsor:  <input type="text"name="sponsor"/><br><br>
City: <select name="city">
    <option value="Arusha">Arusha</option>
     <option value="Dar es Salam">Dar es Salaam</option>
     <option value="Dodoma">Dodoma</option>
     <option value="Mwanza">Mwanza</option>
     <option value="Mbeya">Mbeya</option>
    </select>
<br><br>
Theme:<select name="theme">
     <option value="drama">drama</option>
     <option value="comedy">comedy</option>
     <option value="adventure">adventure</option>
     <option value="advocacy">advocacy</option>
     <option value="education">education</option>
    </select>
    <br><br>
Year of production:<input type="number"name="year"/><br><br>
    Price:<input type="currency"name="price"/><br><br>
    <input type= "Submit" name ="Submit"/>
    <a href="employee_pro.php">Go back</a>
    </center>
    </form>





    </body>
</html>
