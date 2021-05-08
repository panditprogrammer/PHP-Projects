<!-- submitting form data to the databases; -->
<?php

include "dbconn.php";
include "css/style.php";
include "links/links.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $symptoms = $_POST['symptoms'];
    $message = $_POST['message'];

    $all_sym = "";

    foreach ($symptoms as $all_sym1) {
        //concatenation
        $all_sym .= $all_sym1 . ",";
    }

    $sql = "insert into `corona_user`(username,email,symptoms,message) values ('$username','$email','$all_sym','$message')";
    $query = mysqli_query($conn, $sql);

    // showing the sending message alert 
    if ($query) {
?>

        <script>
            alert("Message sent successfully");
            <?php
            header("location:index.php");
            ?>
        </script>

    <?php
    } else {
    ?>

        <script>
            alert("unable to send message!");
        </script>

<?php
        header("location:index.php");
    }
}
