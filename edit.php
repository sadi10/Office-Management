<?php

include_once("connection.php");

if (isset($_POST['update'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $bday = mysqli_real_escape_string($conn, $_POST['bday']);

    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $joindate = mysqli_real_escape_string($conn, $_POST['joiningdate']);

    $employeeid = mysqli_real_escape_string($conn, $_POST['employeeid']);

    $designation = mysqli_real_escape_string($conn, $_POST['designation']);

    $branch = mysqli_real_escape_string($conn, $_POST['branch']);

    $officeemail = mysqli_real_escape_string($conn, $_POST['officeemail']);
    $roomno = mysqli_real_escape_string($conn, $_POST['roomno']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);


    if (empty($name) || empty($department) || empty($bday) || empty($address) || empty($phone)  || empty($email) || empty($joindate) || empty($employeeid) || empty($designation) || empty($branch) || empty($officeemail) || empty($roomno) || empty($username)) {

        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if (empty($username)) {
            echo "<font color='red'>Username field is empty.</font><br/>";
        }

        if (empty($department)) {
            echo "<font color='red'>Department field is empty.</font><br/>";
        }

        if (empty($bday)) {
            echo "<font color='red'>Birtdate field is empty.</font><br/>";
        }

        if (empty($address)) {
            echo "<font color='red'>Address field is empty.</font><br/>";
        }

        if (empty($phone)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        }

        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if (empty($joindate)) {
            echo "<font color='red'>Joining feild is empty.</font><br/>";
        }

        if (empty($designation)) {
            echo "<font color='red'>Designation feild is empty.</font><br/>";
        }

        if (empty($officeemail)) {
            echo "<font color='red'>Office email feild is empty.</font><br/>";
        }

        if (empty($employeeid)) {
            echo "<font color='red'>Employee id feild is empty.</font><br/>";
        }

        if (empty($branch)) {
            echo "<font color='red'>Branch feild is empty.</font><br/>";
        }
        if (empty($roomno)) {
            echo "<font color='red'>Room nofeild is empty.</font><br/>";
        }
    } else {

        $result = mysqli_query($conn, "update employeeinfo set fullname='$name',department='$department',bday='$bday',address='$address', phone='$phone', email='$email', joindate='$joindate', designation='$designation', employeeid='$employeeid', branch='$branch', officeemail='$officeemail', roomno='$roomno', username='$username' where id=$id");


        header("Location: adminpanel.php");
    }
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
    $employeeid = $res['employeeid'];
    $designation = $res['designation'];
    $branch = $res['branch'];
    $roomno = $res['roomno'];
    $officeemail = $res['officeemail'];
    $username = $res['username'];
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

    <form name="form1" method="post" action="edit.php">
        <table border="0">

            <tr>
                <td>Employee ID</td>
                <td><input type="number" name="employeeid" value="<?php echo $employeeid; ?>"></td>
            </tr>


            <tr>
                <td>Employee Username</td>
                <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
            </tr>


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
                <td>Designation</td>
                <td><input type="text" name="designation" value="<?php echo $designation; ?>"></td>
            </tr>

            <tr>
                <td>Branch</td>
                <td><input type="text" name="branch" value="<?php echo $branch; ?>"></td>
            </tr>

            <tr>
                <td>Room no</td>
                <td><input type="text" name="roomno" value="<?php echo $roomno; ?>"></td>
            </tr>

            <tr>
                <td>Office Email</td>
                <td><input type="email" name="officeemail" value="<?php echo $officeemail; ?>"></td>
            </tr>



            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>






        </table>
    </form>
</body>

</html>