<?php
session_start();

include "koneksi.php";

$id = $_POST["email"];
$pw = $_POST["password"];

$sql = "select * from `admin` where email='" . $id . "' and password='" . $pw . "' limit 1";
$hasil = mysqli_query($db_con, $sql);
$jumlah = mysqli_num_rows($hasil);

if ($jumlah > 0) {
    $row = mysqli_fetch_assoc($hasil);
    $_SESSION["email"] = $row["email"];


    header("Location:user.php");
} else {
    ?>
    <script>alert("Email atau password Salah!")</script>;
    <?php 
}
?>