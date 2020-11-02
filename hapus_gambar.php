<?php

include("koneksi.php");

if (isset($_GET['id_gambar'])) {


    $id_gambar = $_GET['id_gambar'];

    $strsql = "DELETE FROM gallery WHERE id_gambar =$id_gambar";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: admin_gallery.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>