<?php

// database configuration
$server = "localhost";
$user = "root";
$password = "";
$database = "user_registration";

//creating connection with database
$conn = mysqli_connect($server,$user,$password,$database);

if($conn)
echo "connected";
else
echo "connection failed!";




?>