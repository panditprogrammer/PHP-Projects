<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>All Data</title>
</head>

<body>
    <!-- navigation menu  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP MYSQL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="select.php">Show data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="login.php">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <h3 class="m-4 text-center">All Registered users</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Language</th>
                    <th scope="col">Password</th>
                    <th scope="col">Address</th>
                    <th scope="col colspan-2">Operations</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php

                include "dbconn.php";

                $sql = "SELECT * FROM register";

                $query = mysqli_query($conn, $sql);

                while ($result = mysqli_fetch_assoc($query)) {
                ?>

                    <tr>
                        <td scope="col"> <?php echo $result['id']; ?> </td>
                        <td scope="col"><?php echo $result['name']; ?></td>
                        <td scope="col"><?php echo $result['email']; ?></td>
                        <td scope="col"><?php echo $result['degree']; ?></td>
                        <td scope="col"><?php echo $result['language']; ?></td>
                        <td scope="col"><?php echo $result['password']; ?></td>
                        <td scope="col"><?php echo $result['address']; ?></td>
                        <td scope="col"><a href="update.php?id= <?php echo $result['id']; ?> " class="btn btn-success">Update</a></td>
                        <td scope="col"> <a href="delete.php?id=<?php echo $result['id']; ?> " class="btn btn-danger"> Delete</a></td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </div>

    </div>





    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>