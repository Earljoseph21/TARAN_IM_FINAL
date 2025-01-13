<!DOCTYPE html>
<html>
        </table>
    </body>
</html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>  
       <form action="addwatch.php">
           <label for='brand'>BRAND</label>
            <input type="text" id="brand" name="brand">
            <label for='color'>COLOR</label>
            <input type="text" id="color" name="color">
            <label for='price'>PRICE</label>
            <input type="text" id="price" name="price">
             <label for='stock'>STOCK</label>
            <input type="text" id="stock" name="stock">
            <input type="submit" value="ADD" name="addcar"/>
            </form>
        <table>
            <tr>
                <th>WID</th>
                <th>BRAND</th>
                <th>COLOR</th>
                <th>PRICE</th>
                <th>STOCK</th>
                <th>ACTION</th>
            </tr>
       
     <?php
        $connection = mysqli_connect("localhost","root","","tarandb");
        $sql = "SELECT * FROM watch";
       
       $result = $connection->query($sql);
     
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['wid']."</td>";
            echo "<td>".$row['brand']."</td>";
            echo "<td>".$row['color']."</td> ";
            echo "<td>".$row['price']."</td> ";
            echo "<td>".$row['stock']."</td> ";
            echo "<td>"
            . "<a class=\"btn\"href=\"editwatchview.php?wid=".$row['wid']."\">Edit</a>"
                    . "<a class=\"btn\"href=\"delete.php?wid=".$row['wid']."\" onclick=\"return confirm('Delete tarandb?')\">Delete</a>"
                    . "</td> ";
            echo "</tr>";
        }
       $connection->close();
     
     ?>
        </table>
    </body>
</html>