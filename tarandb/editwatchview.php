<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>  
  <?php
  
       $wid = $_GET['wid'];
       
       $connection = mysqli_connect("localhost","root","","tarandb");
       $sql = "SELECT * FROM watch WHERE wid=$wid";
       $result = $connection->query($sql);
       $row = mysqli_fetch_assoc($result);
         
 ?>
       <form action="editwatch.php" method="POST">
           <input type="hidden" id="wid" name="wid" value="<?php echo $row['wid'];?>">
           <label for="brand">BRAND</label>
           <input type="text" id="brand" name="brand" placeholder="brand" value="<?php echo $row['brand'];  ?>">
           <label for="color">COLOR</label>
           <input type="text" id="color" name="color" placeholder="color" value="<?php echo $row['color'];  ?>">
            <label for="price">PRICE</label>
             <input type="text" id="price" name="price" placeholder="price" value="<?php echo $row['price'];  ?>">
            <label for="stock">STOCK</label>
            <input type="text" id="stock" name="stock" placeholder="stock" value="<?php echo $row['stock'];  ?>">
            <input type="submit" value="Edit" onclick="return confirm()">
          </form>
    </body>
</html>