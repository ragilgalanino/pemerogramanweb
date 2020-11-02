<?php

include("koneksi.php");

if (isset($_GET['id_porto'])) {


    $id_porto = $_GET['id_porto'];

    $strsql = "DELETE FROM portofolio WHERE id_porto =$id_porto";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: admin_portofolio.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>