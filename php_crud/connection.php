<?php

$hostname = 'localhost';
$username = 'root';
$database = 'php_crud';
$password = "";
$conn = mysqli_connect($hostname,$username,$password,$database);

if($conn)
echo "connected";
else
echo "connection failed";


?>