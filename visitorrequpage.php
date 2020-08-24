<?php

require_once "connection.php";

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
    </style>
</head>

<body>

    <table>
        <tr>
            <th>Time</th>
            <th>Full Name
                <pre></th>
            <th>Email</th>
            <th>Department</th>
            <th>Subject</th>
            <th>Message</th>
            
        </tr>


        <?php
        $sql = "select * from admincontact order by time desc;";
        $result = mysqli_query($conn, $sql);
        $resultCheck  = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<tr><td>" . $row['time'] . "</td><td>" . $row['name'] . "</td><td>" . $row["email"] . "</td><td>" . $row['department'] . "</td><td>" . $row['subject'] . "</td><td>" . $row['message'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 Message";
        }
        ?>


</body>

</html>