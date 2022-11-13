<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_project";
$conn = mysqli_connect($servername, $username, $password, $dbname) or 
die("Connection failed: " . mysqli_connect_error());
?>