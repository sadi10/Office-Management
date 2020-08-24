<?php
session_start();
include 'connection.php';
$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM user where username= '$username'");

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

    <table width='50%' height='15%' border='0'>


        <?php

        while ($res = mysqli_fetch_array($result)) {


            echo "<td bgcolor='green'><a href=\"adminmessage.php?id=$res[username]\"><font color='white'>Your Messages</a>";
            echo "<td bgcolor='green'><a href=\"yourrequest.php?id=$res[id]\"><font color='white'>Your Requests</a>";
        }
        ?>
    </table>




</body>

</html>