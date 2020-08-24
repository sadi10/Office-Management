<?php
require_once('connection.php');
session_start();


if (isset($_REQUEST["submit"])) {


    $username = $_SESSION['username'];
    $type = $_POST['selecttype'];
    $des = $_POST['description'];
    $file = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $path = "upload/" . $file;
    $file1 = explode(".", $file);
    $ext = $file1[1];
    $allowed = array("jpg", "png", "gif", "pdf", "wmv", "pdf", "zip");
    if (in_array($ext, $allowed)) {
        move_uploaded_file($tmp_name, $path);

        $que = "insert into award(username,type,photo,description) values('$username','$type','$file','$des')";
        mysqli_query($conn, $que);
        header('location:award.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form {
            text-align: center;
        }

        input {
            margin: 5px 5px;
            padding: 5px;
        }
    </style>
</head>

<body>

    <ul>
        <li><a href="userpanel.php">Home</a></li>

    </ul>


    <form enctype="multipart/form-data" method="post">


        <label>Select Type</label>
        <select id="myList" name="selecttype">
            <option value="Award">Award</option>
            <option value="Certificate">Certificate</option>
        </select></br>

        <label>Description</label>
        <textarea rows="5" cols="50" name="description">
        </textarea></br>


        <label>Award/Certificate</label>
        <input type="file" name="file"></br>
        <input type="submit" name="submit" value="upload">

    </form>
</body>

</html>