<?php
session_start();
header('location:userloginpage.php');

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection Successful";
} else {
    echo "No connection";
}

mysqli_select_db($con, "intdb");

$name = $_POST['user'];
$pass = $_POST['password'];
$dept = $_POST['department'];

$q = "select * from user where name='$name'  ";

$_result = mysqli_query($con, $q);
$num = mysqli_num_rows($_result);


if ($num == 1) {
    echo "Username already exist";
} else {
    $qy = "insert into user(username,password,department) values ('$name', '$pass', '$dept')";
    mysqli_query($con, $qy);
}
