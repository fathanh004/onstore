<!DOCTYPE HTML>
<html lang="en">

<head>
    <link rel="icon" href="Logo.png" sizes="32x32" type="image/png">
    <link rel="icon" href="Logo.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="Logo.png" color="#563d7c">
    <link rel="icon" href="Icon.png">
    <title>OnstorE : Login Admin</title>
</head>

<body>
    <form action="login_action.php" method="post">
        <div id="div1" align="center">
            <div id="picture">
                <img src="Logo.png" height="90" width="90" />
            </div>
            <div id="header">
                <h1 id="heading">Login</h1>
            </div>
            <div>
                <div id="div2">
                    Email:
                    <br>
                    <input type="text" name="email" size="30">
                    <br>
                    <br>
                    Password:
                    <br>
                    <input type="password" name="password" size="30">
                    <br>
                    <br>
                    <input class="style1" type="submit" name="submit" value="LOGIN">
                </div>
            </div>
        </div>
    </form>
    <style type="text/css">
        #div1 {
            border-radius: 25px;
            position: absolute;
            width: 300px;
            height: 400px;
            background-image: url(bglogin.jpg);
            border: 4px solid white;
            top: 20%;
            left: 40%;
            color: white;
        }

        #div2 {
            position: absolute;
            top: 45%;
            left: 10%;
        }

        .style1 {
            font-weight: bold;
        }

        #heading {
            padding: 0px 0px 0px 30px;
        }

        #picture {
            width: 100px;
            height: 50px;
            padding: 20px 0px 20px 0px;
        }

        #header {
            width: 150px;
            height: 50px;
            color: white;
            font-family: Arial;
            padding: 0px 30px 0px 0px;
        }

        body {
            background-image: url(bglogin2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</body>

</html>