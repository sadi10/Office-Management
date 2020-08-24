<?php
session_start();
include 'connection.php';

$que = "select * from employeeinfo order by Department asc";


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



        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>

    <ul>
        <li><a href="adminpanel.php">Home</a></li>

    </ul>

    <div class="sigupform">
        <form action="searchemployee.php" method="post">
            <div class="form-class">
                <label>Employee Name</label>
                <input type="text" name="empname" class="userinput">

                <button type="submit" class="submitbutton">Search Employee</button>
            </div>

        </form>

    </div>


    <table>
        <tr>
            <td>Employee ID</td>
            <td>Username</td>
            <td>Fullname</td>
            <td>Department</td>
            <td>Birthday</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Joining Date</td>
            <td>Designation</td>
            <td>Branch</td>
            <td>Room no</td>
            <td>Office Email</td>
            <td>Employee Photo</td>

        </tr>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
            <tr>
                <td><?php echo $row["employeeid"] ?></td>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["fullname"] ?></td>
                <td><?php echo $row["department"] ?></td>
                <td><?php echo $row["bday"] ?></td>
                <td><?php echo $row["address"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["joindate"] ?></td>
                <td><?php echo $row["designation"] ?></td>
                <td><?php echo $row["branch"] ?></td>
                <td><?php echo $row["roomno"] ?></td>
                <td><?php echo $row["officeemail"] ?></td>

                <td><img src="upload/<?php echo $row["image"] ?>"></img>
                </td>

            </tr>

        <?php
        }

        ?>
    </table>


</body>

</html>