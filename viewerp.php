<?php
session_start();
include 'connection.php';



$que = "select * from employeeinfo where department='erp' ";


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

    <ul>
        <li><a href="about.php">Home</a></li>

    </ul>



    <table>
        <tr>

            <td>Fullname</td>
            <td>Department</td>


            <td>Phone</td>
            <td>Email</td>

            <td>Employee Photo</td>

        </tr>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
            <tr>
                <td><?php echo $row["fullname"] ?></td>
                <td><?php echo $row["department"] ?></td>


                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["email"] ?></td>


                <td><img src="upload/<?php echo $row["image"] ?>"></img>
                </td>

            </tr>

        <?php
        }

        ?>
    </table>


</body>

</html>