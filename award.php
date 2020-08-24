<?php
session_start();
include 'connection.php';


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <a href="awardcertificate.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add more</a>


    <div class="container py5">
        <div class="row mt-4">

            <?php
            require "connection.php";
            $user = $_SESSION['username'];
            $query = "SELECT * FROM award WHERE username='$user' ";
            $query_run = mysqli_query($conn, $query);
            $check_faculty = mysqli_num_rows($query_run) > 0;

            if ($check_faculty) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="upload/<?php echo $row['photo']; ?>" width="200px" height="300px" alt="image">
                            <div class="card-body">

                                <h2 class="card-title"> <?php echo $row['type']; ?> </h2>

                                <h5 class="card-title"> <?php echo $row['description']; ?> </h5>

                            </div>
                        </div>
                    </div>
            <?php


                }
            } else {
                echo "No data found";
            }
            ?>

        </div>
    </div>
</body>

</html>