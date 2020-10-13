<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Pendaftaran</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    if (isset($_POST['submit'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $sks = $_POST['sks'];
    
        $sql = "INSERT INTO matakuliah (kode, nama, sks)
        VALUES ('$kode','$nama','$sks')";

        if(mysqli_query($conn, $sql)){
            echo "Data berhasil diinput";
        }
        else {
            echo "Data tidak berhasil diinput, dg error:".mysqli_error($conn);
        }

?>
    nama matkul <?php echo $nama ?>
    <br>
    kode : <?php echo $kode ?>
    <br>
    kategori <?php echo $kategori ?>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bisa diakses langsung";
   }
?>
</body>
</html>