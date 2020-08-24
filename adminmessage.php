<?php
session_start();
include_once("connection.php");
$_SESSION['username'];
$uname = $_SESSION['username'];
$que = "select * from userinbox where username='$uname' ";


$_result = mysqli_query($conn, $que);
$rowcount = mysqli_num_rows($_result);

if (isset($_POST['submit'])) {

    $name = $_SESSION['username'];
    $message = $_POST['message'];





    $qy = "insert into userinbox(username,message) values ('$name', '$message')";
    mysqli_query($conn, $qy);
    header('location:adminmessage.php');
}

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

    <table>
        <tr>

            <td>
                <h1>Chatting</h1>
            </td>


        </tr>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
            <tr>
                <td>
                    <h5>You: </h5><?php echo $row["message"] ?>
                </td>

                <td></br>
                    <h5>admin: </h5><?php echo $row["messagereply"] ?>
                </td>

            </tr>

        <?php
        }

        ?>
    </table>





    <form action="adminmessage.php" method="post">




        <div class="elem-group">
            <label for="message">Write your message</label><br>
            <textarea id="message" name="message" placeholder="Say whatever you want." required></textarea>
        </div>


        <button type="submit" name="submit">Send</button>
    </form>




</body>

</html>