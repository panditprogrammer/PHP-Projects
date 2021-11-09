<?php
require_once "connection.php";

if(isset($_POST['submit']))
{
    $message = $_POST['get_msg'];

    $sql = "INSERT INTO chat_table (message) VALUES('$message')";

    $result = mysqli_query($con,$sql);
    if($result)
    // echo "<br>inserted";
    header("location:index.php");
}



?>