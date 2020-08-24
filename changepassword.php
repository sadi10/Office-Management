<?php
session_start();
include_once('connection.php');

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $oldpass = $_POST['oldpassword'];
    $newpass = $_POST['newpassword'];
    $confirmpass = $_POST['confirmpassword'];
}

$query = "select username from admin where username='$username' && password='$oldpass'  ";

$userquery = "select username from admin where username='$username' ";
$oldpassquery = "select password form admin where username = '$username'";

if ($userquery != $username) {
    echo "Wrong Entry. Try again";
} else if ($oldpassquery != $oldpass) {
    echo "Wrong Entry. Try again";
}



if ($oldpass == "") {
    echo "Current Password field is required <br />";
}

if ($newpass == "") {
    echo "New Password field is required <br />";
}

if ($confirmpass == "") {
    echo "Conform Password field is required <br />";
}

$_result = mysqli_query($conn, $query);
$num = mysqli_num_rows($_result);

if ($newpass == $confirmpass) {
    if ($num > 0) {
        $update = mysqli_query($conn, "update admin set password='$newpass' where username='$username' ");
        $_SESSION['messg1'] = "Password change successfully";
        echo '<script>alert("Password Changed successfully.Login Again")</script>';
        header('location:adminloginpg.php');
    }
} else {
    echo "password not matched";
}
