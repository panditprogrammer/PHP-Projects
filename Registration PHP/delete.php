<?php

include "dbconn.php";

$id = $_GET['id'];

$sql = "DELETE FROM register WHERE  id = $id";
$query = mysqli_query($conn,$sql);

if($query)
{
    echo "Deleted successfully";
    header('location:select.php');
}
else
echo "Unable to delete";


?>