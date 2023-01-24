<?php

include 'koneksi.php';
 
$nameitem = $_POST['namaitem'];
$nickname = $_POST['nickname'];
$idgame = $_POST['idgame'];
$bukti = $_POST['bukti'];
 
$queryorder = mysqli_query($db_con,"insert into fforder values('','$nickname','$idgame','$nameitem','$bukti')");
 if ($queryorder) {
     echo "
        <script>alert('transaksi berhasil!! Menunggu Konfirmasi Admin')</script>
     ";
 }else {
    echo "
        <script>alert('transaksi gagal!!')</script>
    ";
 }

header("Location: FForder.php");
?>