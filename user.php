<?php
session_start();

if (!isset($_SESSION["email"])) {
    echo "Anda harus login dulu <br><a href='tugas10.php'>Klik disini</a>";
    exit;
}
$username = $_SESSION["email"];

require "koneksi.php";
$query_ffoder = mysqli_query($db_con, "SELECT * FROM fforder");
$query_mlorder = mysqli_query($db_con, "SELECT * FROM mlorder");
$query_ytorder = mysqli_query($db_con, "SELECT * FROM ytorder");

?>
<!DOCTYPE html>
<html>

<link rel="icon" href="Logo.png" sizes="32x32" type="image/png">
<link rel="icon" href="Logo.png" sizes="16x16" type="image/png">
<link rel="mask-icon" href="Logo.png" color="#563d7c">
<link rel="icon" href="Icon.png">
<title>OnstorE : Admin</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<body>
    <header>
        <div class="navbar shadow-sm"
            style="background-image: url(bglogin.jpg); background-repeat: no-repeat; background-size: cover;">
            <div class="container d-flex justify-content-between">
                <a href="Homepage.php" class="navbar-brand d-flex align-items-center"
                    style="color: white; font-size: 30px;">
                    <img src="Logo.png" width="70" height="70" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24"
                        focusable="false">
                    <circle cx="12" cy="13" r="4"></circle>
                    </img>
                    <strong>OnstorE</strong>
                </a>
            </div>
        </div>
    </header>
    <main role="main" class="p-3">
        <!-- freefire -->
        <div class="card mb-3">
            <h5 class="card-header text-center bg-primary text-white">Daftar Cutomer Free Fire <?= date('D, d-M-Y') ?>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nickname</th>
                        <th scope="col">Id Game</th>
                        <th scope="col">Order Free Fire</th>
                        <th scope="col">Bukti</th>
                    </tr>
                </thead>
                <?php 
                    $i = 1;
                    while($data = mysqli_fetch_array($query_ffoder)) :
                ?>
                <tbody>
                    <tr class="text-center">
                        <th scope="row"><?= $i++; ?>.</th>
                        <td><?= $data['nickFF']; ?></td>
                        <td><?= $data['idFF']; ?></td>
                        <td><?= $data['orderFF']; ?></td>
                        <td><?= $data['buktiFF']; ?></td>
                    </tr>
                </tbody>
                <?php 
                    endwhile;
                ?>
            </table>
        </div>
        <!-- ./freefire -->
        <!-- mobile legends -->
        <div class="card mb-3">
            <h5 class="card-header text-center bg-primary text-white">Daftar Cutomer Mobile Legends
                <?= date('D, d-M-Y') ?>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nickname</th>
                    </tr>
                </thead>
                <?php 
                    $i = 1;
                    while($data = mysqli_fetch_array($query_mlorder)) :
                ?>
                <tbody>
                    <tr class="text-center">
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $data['nickML']; ?></td>
                    </tr>
                </tbody>
                <?php 
                    endwhile;
                ?>
            </table>
        </div>
        <!-- ./mobile legends-0 -->
        <!-- yt premium -->
        <div class="card">
            <h5 class="card-header text-center bg-primary text-white">Daftar Cutomer Youtube Premium
                <?= date('D, d-M-Y') ?>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Email </th>
                    </tr>
                </thead>
                <?php 
                    $i = 1;
                    while($data = mysqli_fetch_array($query_ytorder)) :
                ?>
                <tbody>
                    <tr class="text-center">
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $data['emailYT']; ?></td>
                    </tr>
                </tbody>
                <?php 
                    endwhile;
                ?>
            </table>
        </div>
        <!-- ./yt premium -->
    </main>
    <footer class="text-muted"
        style="background-image: url(bglogin.jpg); background-repeat: no-repeat; background-size: cover;">
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