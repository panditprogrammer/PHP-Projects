<?php
$root_path = $_SERVER["DOCUMENT_ROOT"];
require_once $root_path . "/css/style.php";
?>

<script>
    // this code prevent refresh data base entry 
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>





<?php
function show()
{

    require_once "connection.php";
    // $sql = "SELECT * FROM `chat_table`";
    $sql = "SELECT * FROM `chat_table` ORDER BY ID DESC LIMIT 3";
    $result = mysqli_query($con, $sql);
    $number_of_rows = mysqli_num_rows($result);

    if ($number_of_rows > 0) {

        $data = mysqli_fetch_assoc($result);
        echo '<h5 class="text-success">';
        echo $data['message'];
        echo '</h5>';

        $data = mysqli_fetch_assoc($result);
        echo '<h5 class="text-secondary">';
        echo $data['message'];
        echo '</h5>';

        $data = mysqli_fetch_assoc($result);
        echo '<h5 class="text-secondary">';
        echo $data['message'];
        echo '</h5>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="5";> -->
    <title>Chat with Friends</title>
    <!-- custom css  -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center text-info my-4">Chat With My Friends</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <form action="insert.php" method="post">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter message</label>
                        <textarea class="form-control" id="get_msg" name="get_msg" rows="2" required></textarea>
                        <button class="btn btn-info my-4" type="submit" name="submit" id="submit">Send</button>
                        <a href="/index.php" class="btn btn-secondary my-4"  id="submit">New Message</a>
                    </form>
                </div>

                <div class="show_message my-4" id="show">

                </div>

            </div>
        </div>
    </div>
</body>

</html>

<script>
    setInterval(() => {
        document.getElementById("show").innerHTML = `<?php  show(); ?>`;
    }, 5);



</script>