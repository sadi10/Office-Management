<!DOCTYPE html>
<html lang="en">

<head>
    <title>Liz Fashion Ind. Ltd.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            overflow: hidden;
            background-color: #5F9EA0;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <img class="float-left" src="logo.jpg" style="width:20%">
        <div class="header-right">
            <a href="about.php" class="right">ABOUT</a>
            <a href="contactpage.php" class="right">CONTACT</a>
            <a href="userloginpage.php" class="right">LOGIN</a>
            <a href="adminloginpg.php" class="right">ADMIN</a>
        </div>
    </div>

    <div class="footer">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        </div>
        <!-- Copyright -->

        </footer>
    </div>
</body>

</html>