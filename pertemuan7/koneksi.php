<?php
$namaserver = "localhost";
$username = "root";
$password = "";
$namaDB = "weblanjut";


//membuat koneksi
$conn = mysqli_connect($namaserver, $username, $password, $namaDB);
//cekkoneksi
if (!$conn){
    die("Koneksi Gagal");
}
?>