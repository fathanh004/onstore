<!DOCTYPE HTML>
<html lang="en">

<head>
    <link rel="icon" href="Logo.png" sizes="32x32" type="image/png">
    <link rel="icon" href="Logo.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="Logo.png" color="#563d7c">
    <link rel="icon" href="Icon.png">
    <title>OnstorE : Free Fire</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
    <header>
        <div class="navbar shadow-sm" style="background-image: url(bglogin.jpg); background-repeat: no-repeat; background-size: cover;">
            <div class="container d-flex justify-content-between">
                <a href="Homepage.php" class="navbar-brand d-flex align-items-center" style="color: white; font-size: 30px;">
                    <img src="Logo.png" width="70" height="70" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false">
                    <circle cx="12" cy="13" r="4"></circle>
                    </img>
                    <strong>OnstorE</strong>
                </a>
            </div>
        </div>
    </header>
    <form action="FForder_action.php" method="post">
        <div class="card" style="width: 23rem; position:absolute; top: 20%; left: 40%; background-color: #a032a8; color:white;">
            <img src="Poster_FF.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title" align="center">ORDER FREE FIRE</h5>
                <p class="card-text" align="center">Pastikan Data Sudah Benar!</p>
            </div>
            <div align="center">
                <table border=0>
                    <tr>
                        <td align="center">Nama Item</td>
                        <td>:</td>
                        <td><input name="namaitem" type="text" size="30" placeholder="20 DM 3.000" required /></td>
                    </tr>
                    <tr>
                        <td align="center">Nick</td>
                        <td>:</td>
                        <td><input name="nickname" type="text" size="30" placeholder="Nickname Free Fire Anda" required /></td>
                    </tr>
                    <tr>
                        <td align="center">Id</td>
                        <td>:</td>
                        <td><input name="idgame" type="text" size="30" placeholder="12345678" required /></td>
                    </tr>
                    <tr>
                        <td align="center">Bukti</td>
                        <td>:</td>
                        <td><input name="bukti" type="file" accept="image/*" required /></td>
                    </tr>
                </table>
                <input class="btn btn-sm btn-outline-secondary" style="border-color:white; color:white" type="submit" value="ORDER" />
            </div>

        </div>
    </form>
    <style type="text/css">
        #div1 {
            border-radius: 25px;
            position: absolute;
            width: 400px;
            height: 500px;
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

        td {
            padding: 10px;
        }
    </style>
</body>


</html>