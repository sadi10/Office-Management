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
        <a href="hrdocumentpanel.php" class="list-group-item list-group-item-action action">HR Documents</a>

        <a href="#" class="list-group-item list-group-item-action">IT Documents</a>
        <a href="#" class="list-group-item list-group-item-action">ERP Documents</a>
        <a href="#" class="list-group-item list-group-item-action">Accounts Documents</a>
        <a href="#" class="list-group-item list-group-item-action">Knitting Documents</a>
        <a href="#" class="list-group-item list-group-item-action">Fabrics Documents</a>





    </div>

</body>

</html>