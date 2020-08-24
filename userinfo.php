<?php
session_start();
include 'connection.php';


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

    <ul>
        <li><a href="adminpanel.php">Home</a></li>

    </ul>


    <table>
        <tr>
            <th>username</th>
            
        </tr>


        <?php
        $sql = "select * from user;";
        $result = mysqli_query($conn, $sql);
        $resultCheck  = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['username'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 User";
        }
        ?>
</body>

</html>