<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
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

    <h2> Hello <?php echo $_SESSION['username']; ?> </h2>

    <div class="list-group">
        <a href="chngpassuserpg.php" class="list-group-item list-group-item-action action">Reset Password </a>

        <a href="employeelist.php" class="list-group-item list-group-item-action">Employee List</a>
        <a href="#" class="list-group-item list-group-item-action">Employees’ Signature</a>
        <a href="userworkstatus.php" class="list-group-item list-group-item-action">work list, meeting date, update appointment</a>

        <a href="adminfeedback.php" class="list-group-item list-group-item-action">Admin Feedback</a>

        <a href="viewwork.php" class="list-group-item list-group-item-action">Daily Work</a>
        <a href="portfoliopanel.php" class="list-group-item list-group-item-action">Portfolio</a>
        <a href="#" class="list-group-item list-group-item-action">Resource</a>

        <a href="logout.php" class="list-group-item list-group-item-action">Logout</a>

    </div>

</body>

</html>