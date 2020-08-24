<?php
require_once('connection.php');


if (isset($_REQUEST["submit"])) {
    $day = $_POST['day'];
    $subject = $_POST['subject'];
    $details = $_POST['details'];





    $que = "insert into workingstatus(Day,Subject,Details) values('$day','$subject','$details')";




    mysqli_query($conn, $que);

    header('location:adminworkstatus.php');
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
        <li><a href="adminpanel.php">Home</a></li>

    </ul>

    <form enctype="multipart/form-data" method="post">

        <label>Day</label>
        <input type="datetime-local" name="day" class="userinput"></br>
        <label>Subject</label>
        <input type="text" name="subject" class="userinput"></br>
        <label>Details</label><br>
        <!-- <input type="text" rows="4" name="details" class="userinput"></br> -->

        <textarea class="userinput" name="details" rows="4" cols="50">
        </textarea>




        <input type="submit" name="submit" value="upload">

    </form>
</body>

</html>