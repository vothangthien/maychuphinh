<?php
$server = "localhost";
$servername = "root";
$password = "";
$dbname = "csdlvideo";
$conn = mysqli_connect($server, $servername, $password, $dbname);

if (!$conn) {
    die("Could not connect to server: " . mysqli_connect_error());
}

?>