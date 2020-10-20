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
    if (isset($_POST['tombolsubmit'])) {
        $namadepan = $_POST['namadepan'];
        $namabelakang = $_POST['namabelakang'];
        $email = $_POST['email'];
        
    
        $sql = "INSERT INTO regis (namadepan, namabelakang, email)
        VALUES ('$namadepan','$namabelakang', '$email')";

        if(mysqli_query($conn, $sql)){
            echo "Data berhasil diinput";
        }
        else {
            echo "Data tidak berhasil diinput, dg error:".mysqli_error($conn);
        }

?>
    nama lengkap: <?php echo $namadepan." ".$namabelakang ?>
    <br>
    email: <?php echo $email ?>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bisa diakses langsung";
   }
?>
</body>
</html>