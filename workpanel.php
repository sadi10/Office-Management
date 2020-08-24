<?php
session_start();
if (!isset($_SESSION['adminusername'])) {
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
    <ul>
        <li><a href="adminpanel.php">Home</a></li>

    </ul>
    <div class="list-group">
        <a href="adminworkstatus.php" class="list-group-item list-group-item-action action">Update Work</a>
        <a href="declaredwork.php" class="list-group-item list-group-item-action action">Declared Work</a>



    </div>
</body>

</html>