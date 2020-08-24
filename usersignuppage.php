<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 5px;
            text-align: center;
        }

        .submitbutton {
            background-color: #3562c7;
            /* Green */
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px 2px;
            cursor: pointer;
            border-radius: 12px;
        }
    </style>
</head>

<body>
    <div class="sigupform">
        <form action="userregistration.php" method="post">
            <div class="form-class">
                <label>Username</label>
                <input type="text" name="user" class="userinput"></br>
                <label>Password</label>
                <input type="password" name="password" class="userinput"></br>
                <label>Department</label>
                <input type="text" name="department" class="userinput"></br>

                <button type="submit" class="submitbutton">SignUp</button>
            </div>

        </form>

    </div>
</body>

</html>