<?php

include "connection.php";

//getting id to delete the user detatils
    $delete_id = $_GET['id'];

    
    //sql command for deleting 
    $sql = "DELETE FROM `phpcrud` WHERE id = $delete_id";

    $query = mysqli_query($conn,$sql);

    //redirect to page
    header('location:display.php');


?>