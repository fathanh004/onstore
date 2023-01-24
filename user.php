<?php
session_start();

if (!isset($_SESSION["email"])) {
    echo "Anda harus login dulu <br><a href='tugas10.php'>Klik disini</a>";
    exit;
}
$username = $_SESSION["email"];
?>
<!DOCTYPE html>
<html>

<link rel="icon" href="Logo.png" sizes="32x32" type="image/png">
<link rel="icon" href="Logo.png" sizes="16x16" type="image/png">
<link rel="mask-icon" href="Logo.png" color="#563d7c">
<link rel="icon" href="Icon.png">
<title>OnstorE : Admin</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

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
    <main role="main"></main>
    <footer class="text-muted" style="background-image: url(bglogin.jpg); background-repeat: no-repeat; background-size: cover;">
        <div class="container" style="color:white;">
            <p class="float-right" style="background-color:white;">
                <a href="logout.php">LOGOUT</a>
            </p>
            Halaman Ini Hanya Untuk Admin
        </div>
    </footer>
</body>
<style>
    body {
        background-image: url(bglogin2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

</html>