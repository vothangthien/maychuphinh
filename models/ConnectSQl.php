<?php
     $server="localhost";
     $servername="root";
     $password="";
     $dbname="shopping";
     $conn=mysqli_connect($server,$servername,$password,$dbname);
     if(!$conn){
          die("Could not connect to server") . mysqli_connect_error($conn);
     }

?>