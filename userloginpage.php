<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .form-class {
            border-radius: 2px;
            border-style: solid;
            padding: 10px;
            text-align: center;

        }

        .usernameclass {
            display: block;
            margin: 10px;

        }



        .nonmember {
            text-align: center;
        }

        h1 {
            color: red;
        }

        #myButton {
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
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
            display: block;
            margin: 5px 500px;
        }
    </style>


</head>

<body>


    <div class='userloginform'>

        <form action="validation.php" method="post">

            <div class="form-class">
                <h1>User login</h1>
                <div class='usernameclass'>
                    <label>Username</label>
                    <input type="text" name="user" class="userinput">
                </div>
                <label>Password</label>
                <input type="password" name="password" class="userpassword">

                <button type="submit" class="submitbutton">login</button>

            </div>

        </form>
    </div>
    <div class='nonmember'>
        <h4>Don't have an account?</h4>
        <!-- <button href="usersignup.php" class="userSignUP">Signup</button> -->
        <button onclick="location.href = 'usersignuppage.php';" id="myButton" class="usersignupButton">Signup</button>
    </div>




</body>

</html>