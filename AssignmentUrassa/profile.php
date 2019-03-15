<?php include ('service.php'); ?>
<?php include ('filmview.php')?>
<!DOCTYPE>
<html>

<head><title>profile</title>
  <style type="text/css">
  form{
    margin:100px;


  }
  ul{
    text-align: right;
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

</head>
    <link rel="stylesheet" type="text/css" href=".css">

    <center>
<body>
  <header>
    <ul >
      <?php  if (isset($_SESSION['username'])) : ?>
      	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <?php endif ?>


    </ul>
  </li>
</ul>
  </header>
  <h1>ONLINE FILM STREAM</h1>

<form action="filmview.php" method="post">
<input type="text" name="valueToSearch" size='70' placeholder="Enter The Tittle Of Your Movie">
<input type="submit" name="search" value="Search">
</form>
</body>
    </center>
</Html>
