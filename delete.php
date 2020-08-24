<?php

include_once("connection.php");

if (isset($_POST['delete'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $bday = mysqli_real_escape_string($conn, $_POST['bday']);

    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $joindate = mysqli_real_escape_string($conn, $_POST['joiningdate']);



    $result = mysqli_query($conn, "delete from employeeinfo where id=$id");

    header("Location: adminpanel.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM employeeinfo WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $name = $res['fullname'];
    $department  = $res['department'];
    $bday = $res['bday'];
    $address = $res['address'];
    $phone = $res['phone'];
    $email = $res['email'];
    $joindate = $res['joindate'];
}
?>
<html>

<head>
    <title>Edit Data</title>
</head>

<body>
    <ul>
        <li><a href="adminpanel.php">Home</a></li>

    </ul>

    <form name="form1" method="post" action="delete.php">
        <table border="0">
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="fullname" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><input type="text" name="department" value="<?php echo $department; ?>"></td>
            </tr>
            <tr>
                <td>Birthdate</td>
                <td><input type="date" name="bday" value="<?php echo $bday; ?>"></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $address; ?>"></td>
            </tr>

            <tr>
                <td>Phone</td>
                <td><input type="number" name="phone" value="<?php echo $phone; ?>"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $email; ?>"></td>
            </tr>

            <tr>
                <td>Joining Date</td>
                <td><input type="date" name="joiningdate" value="<?php echo $joindate; ?>"></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="delete" value="Delete"></td>
            </tr>






        </table>
    </form>
</body>

</html>