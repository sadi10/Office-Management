<?php

session_start();
include_once("connection.php");

if (isset($_POST['approve'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $room = mysqli_real_escape_string($conn, $_POST['roomnumber']);
    $approve = "approve";

    $result = mysqli_query($conn, "update userrequest set status='$approve',room='$room' where id=$id");
    header("Location: userrequest.php");
}
?>


<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM userrequest WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $user = $res['user'];
    $reason  = $res['reason'];
    $datetime = $res['datetime'];
    $message = $res['message'];
}
?>
<html>

<head>
    <title>Approve Panel</title>
</head>

<body>

    <form name="form1" method="post" action="requestapprove.php">
        <table border="0">
            <tr>
                <td>User name</td>
                <td><input type="text" value="<?php echo $user; ?>"></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td><input type="text" value="<?php echo $reason; ?>"></td>
            </tr>


            <tr>
                <td>Date & Time</td>
                <td><input type="text" value="<?php echo $datetime ?>"></td>
            </tr>

            <tr>
                <td>Message</td>
                <td><input type="text" value="<?php echo $message ?>"></td>
            </tr>

            <tr>
                <td>Room Number</td>
                <td><input type="text" name="roomnumber" value=""></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="approve" value="Approve"></td>
            </tr>






        </table>
    </form>
</body>

</html>