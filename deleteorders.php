<?php
$oid = $_GET['oid'];

    $connection = mysqli_connect("localhost", "root", "","earlsdb");
            $sql = "DELETE FROM Order ID WHERE oid=$oid";
            $connection->query($sql);
            $connection->close();
            
            header("location:index.php");
