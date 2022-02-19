<?php require_once "header.php"; ?>

    <!-- login form starts here  -->
    <div class="container p-0">
        <div class="banner">
            <h3 class="p-2 m-4 text-center">Log In Here </h3>
            <form class="row g-3 justify-content-center">
                <div class="col-md-8">
                    <label for="login-username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="login-username" >
                </div>

                <div class="col-md-8 ">
                    <label for="login-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="login-password">
                </div>


                <div class="col-md-8 m-4">
                    <button type="submit" class="btn btn-success">Log In</button>
                </div>
                <div class="col-md-4 m-4">
                <span>Not signup yet </span>
                    <a href="signup.php" class="btn btn-success">Signup here </a>
                </div>
            </form>
        </div>

    </div>
   <!-- login form ends here  -->

<?php require_once "course.php";  ?>

<?php require_once "feedback.php";  ?>

<?php require_once "footer.php";  ?>
