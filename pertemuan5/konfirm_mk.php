<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
</head>
<body>
    
</body>
</html>
<?php

include_once "koneksi.php";
if (isset($_POST['submit'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $sks = $_POST['sks'];
    $sql="INSERT INTO matakuliah (kode, nama, kategori, sks)
    VAlUES ('$kode','$nama','$kategori','$sks')";
    
    if (mysqli_query($conn, $sql)){
        echo"Data berhasil diinput ";
    }else{
    echo"Data tidak bisa diinput";
    }

    echo $kode;
    echo"<br>";
    echo $nama;
    echo"<br>";
    echo $kategori;
    echo"<br>";
    echo $sks;
}
    else{
        echo "mohon maaf anda belum terdaftar";
    }
?>