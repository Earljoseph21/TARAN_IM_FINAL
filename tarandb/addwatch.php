<?php
     $brand = $_GET['brand'];
     $color = $_GET['color'];
     $price = $_GET['price'];
     $stock = $_GET['stock'];
     
     echo $brand." ".$color."price".$price."stock".$stock;
     
     $connection = mysqli_connect("localhost","root","","tarandb");
     
     $sql = "INSERT INTO watch VALUES(0,'$brand','$color','$price','$stock')";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header("location:index.php");

