<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Panditprogrammer.com</title>
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
          <a class="nav-link " href="select.php">Show data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Register</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>



    <div class="container">
        <h3 class="m-4 text-center">Registration for Jobs</h3>
        <!-- for security we have to use htmlspecialchars -->
        <form class="row " action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="col-md-6 m-auto my-2">
                <label for="username" class="form-label">Name</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="col-md-6 m-auto my-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-6 m-auto my-2">
                <label for="degree" class="form-label">Degree</label>
                <input type="text" class="form-control" id="degree" name="degree">
            </div>
            <div class="col-md-6 m-auto my-2">
                <label for="language" class="form-label">Language</label>
                <input type="text" class="form-control" id="language" name="language">
            </div>
            <div class="col-md-6 m-auto my-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col-md-6 m-auto my-2">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St.US" name="address">
            </div>

            <div class="col-md-12 m-auto my-2">
                <button type="submit" class="btn btn-primary" name="submit">Register</button>
            </div>
        </form>

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

<!-- getting data from form  -->
<?php

// connection from database 
include "dbconn.php";

//checking submit button click or not
if (isset($_POST['submit'])) {
    //for special character inserting to database 
    // mysqli_real_escape_string() 
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $degree = mysqli_real_escape_string($conn, $_POST['degree']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $language = mysqli_real_escape_string($conn, $_POST['language']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    //checking data 
    if ($username === "" || $email === "" || $degree === "" || $address === "" || $language === "" || $password === "") {
        echo "<br><strong>Please fill all fields</strong>";
    } else {
        // insert into database 
        $sql = "INSERT INTO `register`( `name`, `email`, `degree`, `address`, `language`, `password`) VALUES ('$username','$email','$degree','$address','$language','$password')";

        $query = mysqli_query($conn, $sql);

        if ($query)
            echo "<br><strong>Register successfully</strong>";
        else
            echo "<br><strong>Register failed</strong>";
    }
}




?>