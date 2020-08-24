<?php
session_start();
include 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM userinbox ORDER BY time DESC");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            padding: 40px;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            border-radius: 2px;
            border-style: solid;
            color: #da2345;

        }

        td {
            padding: 10px;
            margin: 20px 30px;

        }
    </style>
</head>

<body>

    <ul>
        <li><a href="adminpanel.php">Home</a></li>

    </ul>

    <table width='50%' height='15%' border='0'>

        <tr>
            <td>Time</td>
            <td>User name</td>
            <td>Message</td>



        </tr>
        <?php

        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td bgcolor=''>" . $res['time'] . "</td>";
            echo "<td bgcolor=''>" . $res['username'] . "</td>";
            echo "<td bgcolor=''>" . $res['message'] . "</td>";
            echo "<td bgcolor='green'><a href=\"adminreply.php?id=$res[id]\"><font color='white'>Reply</a><a href=\"massege_delete.php?id=$res[id]\"><font color='white'>Delete</a>";
        }
        ?>
    </table>


</body>

</html>