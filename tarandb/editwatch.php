<?php

$wid = $_POST['wid'];
$brand = $_POST['brand'];
$color= $_POST['color'];
$price= $_POST['price'];
$stock = $_POST['stock'];

$connection = mysqli_connect("localhost","root","","tarandb");
     
     $sql = "UPDATE watch SET Brand='$brand',color='$color',price='$price',stock=$stock WHERE Wid=$wid";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header('location:index.php');