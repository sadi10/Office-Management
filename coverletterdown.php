<?php
require_once('connection.php');


$que = "select * from upload order by time desc";


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
        * {
            text-align: center;
        }

        td {
            margin: 5px 5px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>Time</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Position</td>
            <td>File</td>
        </tr>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
            <tr>
                <td><?php echo $row["time"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["position"] ?></td>

                <td><a href="upload/<?php echo $row["file"] ?>"><?php echo $row["file"] ?></a></td>

            </tr>

        <?php
        }

        ?>
    </table>
</body>

</html>