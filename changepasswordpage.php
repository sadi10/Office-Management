<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>



    <form action="changepassword.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" placeholder="Enter username">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Old Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="oldpassword">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="newpassword">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirmpassword">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>


</body>

</html>