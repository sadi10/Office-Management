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

    <ul>
        <li><a href="userpanel.php">Home</a></li>

    </ul>

    <div class="list-group">
        <a href="hrinfo.php" class="list-group-item list-group-item-action action">HR Information</a>

        <a href="award.php" class="list-group-item list-group-item-action">Certificate/Awards/</a>
        <a href="experience.php" class="list-group-item list-group-item-action">Experience</a>
        <!-- <a href="userdecline.php" class="list-group-item list-group-item-action">Declined</a> -->



    </div>

</body>

</html>