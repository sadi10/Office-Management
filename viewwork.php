<?php
session_start();
include 'connection.php';

$_SESSION['department'];
$dept = $_SESSION['department'];

$que = "select * from workingstatus where dept='$dept' ";


$_result = mysqli_query($conn, $que);
$rowcount = mysqli_num_rows($_result);

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



        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>

    <table>
        <tr>

            <td>Day</td>
            <td>Subject</td>
            <td>Details</td>


        </tr>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
            <tr>
                <td><?php echo $row["Day"] ?></td>
                <td><?php echo $row["Subject"] ?></td>
                <td><?php echo $row["Details"] ?></td>



            </tr>

        <?php
        }

        ?>
    </table>


</body>

</html>