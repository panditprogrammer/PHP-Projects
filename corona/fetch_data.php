<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    include "links/links.php";
    include "css/style.php";
    include "script/script.php"
    ?>

    <title>Live Corona status world wide | Panditprogrammer.com</title>
</head>

<body onload="fetch()">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  p-3 ">
        <a class="navbar-brand pl-5" href="index.php">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 text-capitalize ">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="fetch_data.php">corona live status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#symptoms">corona Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#prevention">preventions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contact">Get help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#about">about corona</a>
                </li>

            </ul>

        </div>
    </nav>


    <!-- poster ================================ -->

    <div class="container">
        <div class="row w-100 h-100 mx-0">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-lg-2">
                <div class="left_div w-100 h-100 d-flex justify-content-center align-items-center my-2 py-2">
                    <img src="images/unity.jpg" alt="" srcset="" width="300" height="300">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-lg-1">
                <div class="right_div w-100 h-100 d-flex justify-content-center align-items-center my-4 p-2">
                    <h2>Stay Safe Stay At Home & Help to stop Cor<span class="spinning_virus">
                            <img src="images/c_virus.png" alt="" srcset="" width="50">
                        </span>na Virus
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- update section ==================================== -->
    <div class="container-fluid">
        <h1 class="text-uppercase text-center p-3">COVID-19 live updates world wide</h1>
        <div class="d-flex justify-content-around align-items-center">

            <!-- create a table for update data  -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center" id="table">
                    <tr>
                        <th>Country</th>
                        <th>Total Confirmed</th>
                        <th>Total Recovered</th>
                        <th>Total Deaths</th>
                        <th>New Confirmed</th>
                        <th>New Recovered</th>
                        <th>New Deaths</th>
                    </tr>
                </table>

            </div>

        </div>
    </div>


    <!-- go to top button ======================== -->
    <i class="far fa-arrow-alt-circle-up float-right  fs-1" onclick="gotop()" id="gotop"></i>

    <!-- footer section ============================ -->
    <footer>
        <div class="container-fluid-expand-lg bg-dark text-light p-3">
            <p class="m-0 text-center">All Rights Reserved by <a href="https://panditprogrammer.com" target="blank" class="text-light">Panditprogrammer.com</a></p>
            <p class="m-0  text-center">Developed by <a href="https://panditprogrammer.com" target="blank" class="text-light">Pandit Programmer</a></p>
        </div>
    </footer>

</body>

</html>