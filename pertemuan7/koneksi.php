<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDB = "weblanjut";

//membuat koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDB);
// check koneksi
if (!$conn){
    die("Koneksi Gagal");
}
?>