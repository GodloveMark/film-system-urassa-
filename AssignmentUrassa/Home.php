<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

        <form action="home.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

            <table>
                <tr>
                      <th>FilmId</th>
                    <th>Title</th>
                    <th>Producer</th>
                    <th>Sponsor</th>
                    <th>City</th>
                    <th>Theme</th>
                    <th>Year of Production</th>
                    <th>Price</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['FilmId'];?></td>
                    <td><?php echo $row['Title'];?></td>
                    <td><?php echo $row['Producer'];?></td>
                    <td><?php echo $row['Sponsor'];?></td>
                      <td><?php echo $row['City'];?></td>
                        <td><?php echo $row['Theme'];?></td>
                          <td><?php echo $row['Year of Production'];?></td>
                            <td><?php echo $row['Price'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

    </body>
</html>
