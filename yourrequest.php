<?php
session_start();
include 'connection.php';
$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM userrequest where user= '$username' AND status='' ");

$rowcount = mysqli_num_rows($result);

$result2 = mysqli_query($conn, "SELECT * FROM userrequest where user= '$username' AND status='approve' ");

$rowcount2 = mysqli_num_rows($result2);

$result3 = mysqli_query($conn, "SELECT * FROM userrequest where user= '$username' AND status='decline' ");

$rowcount3 = mysqli_num_rows($result3);

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

        }

        th {
            padding: 20px;
            Color: #da2345;
        }

        td {
            width: 600px;
        }
    </style>
</head>

<body>

    <h3>Pending</h3>
    <table>
        <tr>

            <td>Subject</td>
            <td>Date & Time</td>
            <td>Message</td>
            <td>Room Number</td>


        </tr>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($result)

        ?>
            <tr>
                <td><?php echo $row["reason"] ?></td>
                <td><?php echo $row["datetime"] ?></td>
                <td><?php echo $row["message"] ?></td>
                <td><?php echo $row["room"] ?></td>
            </tr>

        <?php
        }

        ?>
    </table>

    <h3>Approved</h3>
    <table>
        <tr>

            <td>Subject</td>
            <td>Date & Time</td>
            <td>Message</td>
            <td>Room Number</td>


        </tr>
        <?php
        for ($i = 1; $i <= $rowcount2; $i++) {

            $row = mysqli_fetch_array($result2)

        ?>
            <tr>
                <td><?php echo $row["reason"] ?></td>
                <td><?php echo $row["datetime"] ?></td>
                <td><?php echo $row["message"] ?></td>
                <td><?php echo $row["room"] ?></td>
            </tr>

        <?php
        }

        ?>
    </table>


    <h3>Declined</h3>
    <table>
        <tr>

            <td>Subject</td>
            <td>Date & Time</td>
            <td>Message</td>



        </tr>
        <?php
        for ($i = 1; $i <= $rowcount3; $i++) {

            $row = mysqli_fetch_array($result3)

        ?>
            <tr>
                <td><?php echo $row["reason"] ?></td>
                <td><?php echo $row["datetime"] ?></td>
                <td><?php echo $row["message"] ?></td>

            </tr>

        <?php
        }

        ?>
    </table>




</body>

</html>