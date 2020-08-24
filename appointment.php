<?php
session_start();
include_once("connection.php");

if (isset($_POST['submit'])) {


    $name  = $_SESSION['username'];
    $reason = $_POST['reason'];
    $datetime = $_POST['datetime'];
    $message = $_POST['message'];

    // $q = "select * from user where name='$name'  ";

    // $_result = mysqli_query($con, $q);
    // $num = mysqli_num_rows($_result);


    $qy = "insert into userrequest(user,reason,datetime,message) values ('$name', '$reason', '$datetime','$message')";
    mysqli_query($conn, $qy);
    header('location:userworkstatus.php');
}

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

    <ul>
        <li><a href="userpanel.php">Home</a></li>

    </ul>

    <form action="appointment.php" method="post">
        <!-- <div class="elem-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
        </div> -->

        <div class="elem-group">
            <label for="department-selection">Choose Concerned Department</label>
            <select id="department-selection" name="reason" required>
                <option value="">Select a Reason</option>
                <option value="Work list">Work list</option>
                <option value="Meeting date">Meeting date</option>
                <option value="Update appointment">Update appointment</option>
            </select>
        </div>

        <div class="form-group row">
            <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
            <div class="col-10">
                <input class="form-control" type="datetime-local" value="" name="datetime" id="example-datetime-local-input">
            </div>
        </div>

        <div class="elem-group">
            <label for="message">Write your message</label>
            <textarea id="message" name="message" placeholder="Say whatever you want." required></textarea>
        </div>


        <button type="submit" name="submit">Send Request</button>
    </form>




</body>

</html>