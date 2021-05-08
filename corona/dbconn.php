<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'corona';

$conn = mysqli_connect($server,$user,$password,$database);

if(!$conn)
{
    echo "<h1>connection failed!</h1>";
}



?>