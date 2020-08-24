<?php
session_start();
include 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM userrequest
WHERE status='approve' ");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {

            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            border-radius: 2px;
            border-style: solid;

        }

        tr {
            padding: 40px;
            Color: #da2345;
            margin: 20px 20px;

        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <table width='50%' height='15%' border='0'>

        <tr>
            <td>Time</td>
            <td>User name</td>
            <td>Subject</td>
            <td>Date & Time</td>
            <td>Message</td>
            <td>Approved Room</td>



        </tr>
        <?php

        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td bgcolor=''>" . $res['time'] . "</td>";
            echo "<td>" . $res['user'] . "</td>";
            echo "<td>" . $res['reason'] . "</td>";
            echo "<td>" . $res['datetime'] . "</td>";
            echo "<td>" . $res['message'] . "</td>";
            echo "<td>" . $res['room'] . "</td>";
        }
        ?>
    </table>


</body>

</html>