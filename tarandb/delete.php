<?php

$wid = $_GET['wid'];


$connection = mysqli_connect("localhost","root","","tarandb");
     
     $sql = "DELETE FROM watch WHERE Wid= $wid";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header("location:index.php");