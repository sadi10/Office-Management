<?php
require_once('connection.php');
session_start();


if (isset($_REQUEST["submit"])) {


    $username = $_SESSION['username'];
    $companyname = $_POST['companyname'];
    $position = $_POST['position'];
    $duration = $_POST['duration'];





    $que = "insert into experience(username,company,position,duration) values('$username','$companyname','$position','$duration')";
    mysqli_query($conn, $que);
    header('location:experience.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>
        form {
            text-align: center;
        }

        input {
            margin: 5px 5px;
            padding: 5px;
        }
    </style>
</head>

<body>

    <ul>
        <li><a href="userpanel.php">Home</a></li>

    </ul>


    <form enctype="multipart/form-data" method="post">

        <label>Company Name</label>
        <input type="text" name="companyname" class="userinput"></br>

        <label>Position</label>
        <input type="text" name="position" class="userinput"></br>

        <label>Duration</label>
        <input type="text" name="duration" class="userinput"></br>

        <input type="submit" name="submit" value="Submit">


    </form>
</body>

</html>