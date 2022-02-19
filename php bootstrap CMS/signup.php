<?php require_once "header.php"; ?>

<!-- login form starts here  -->
<div class="container p-0">

    <div class="banner">
        <h3 class="p-2 m-4 text-center">Sign Up Here </h3>
        <form class="row g-3 justify-content-center">
            <div class="col-md-8">
                <label for="signup-name" class="form-label">Username</label>
                <input type="text" class="form-control" id="signup-name">
            </div>

            <div class="col-md-8 ">
                <label for="signup-email" class="form-label">Email</label>
                <input type="email" class="form-control" id="signup-email">
            </div>
            <div class="col-md-8 ">
                <label for="signup-password" class="form-label">Password</label>
                <input type="password" class="form-control" id="signup-password">
            </div>


            <div class="col-md-8 m-4">
                <button type="submit" class="btn btn-success">Sign Up</button>
            </div>
            <div class="col-md-4 m-4">
                <span>Already Signed up </span>
                <a class="btn btn-success" href="login.php">Login here</a>
            </div>
        </form>
    </div>

</div>
<!-- login form ends here  -->

<?php require_once "course.php"; ?>

<?php require_once "feedback.php"; ?>

<?php require_once "footer.php"; ?>