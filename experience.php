<?php
session_start();
include 'connection.php';

$que = "select * from experience order by id asc";


$_result = mysqli_query($conn, $que);
$rowcount = mysqli_num_rows($_result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
            padding: 20px;
            color: lightcoral;
        }

        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>

    <a href="experienceadd.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add more</a>



    <table>
        <tr>
            <td>Company</td>
            <td>Position</td>
            <td>Duration</td>
        </tr>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
            <tr>
                <td><?php echo $row["company"] ?></td>
                <td><?php echo $row["position"] ?></td>
                <td><?php echo $row["duration"] ?></td>
            </tr>

        <?php
        }

        ?>
    </table>


</body>

</html>