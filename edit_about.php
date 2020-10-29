<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mata Kuliah</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
    <?php   
    include_once "koneksi.php"; 
    $status = 2;  
    if (isset($_POST['id'])) {

        $id = $_POST['id']; 
        $gambar = $_POST['gambar'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

         //buat koneksi
         $strSQL = "UPDATE about SET 
         gambar='".$gambar."', 
         judul='".$judul."',
         isi='".$isi."' WHERE id='".$id."'";
        // echo $strSQL;
       // die;
         $runSQL = mysqli_query($conn,$strSQL);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }      
         header("refresh:3; url=about.php"); 
    }        
    else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $strSQL = "SELECT * FROM about WHERE id='".$id."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $gambar = $row["gambar"];
                $judul = $row["judul"];
                $isi = $row["isi"];
            }
        }
    }  
    else {       
        $gambar = "";
        $judul = "";
        $iai = "";
        $id = "";
    }  
    $disableForm = isset($_GET['id']) ? "enabled": "disabled";
    ?>
    <div class="container">
        <h2>Edit About</h2>   

        <?php 
        include "modalform.php";
            if ($status == 1) {
        ?>    
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data berhasil diinput ke dalam database. Halaman ini akan kembali ke List Mahasiswa dalam 3 detik
            </div>
        <?php 
            }
            else if ($status == 0){
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data tidak berhasil diinput ke dalam database.
            </div>
        <?php 
            }
        
        ?>
        <form id="myform" method="post" action="edit_about.php">
            <div class="form-group">
                <label>id</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $id ?>" readonly 
                <?php echo $disableForm ?>>
            </div>
            <div class="form-group">
                <label>gambar</label>
                <input id="gambar" class="form-control" type="text" name="gambar" value="<?php echo $gambar?>" readonly <?php echo $disableForm ?>>
            </div>
            <div class="form-group">
                <label>judul</label>
                <input id="judul" class="form-control" type="text" name="judul" value="<?php echo $judul?>" <?php echo $disableForm ?>>
            </div>  
            <div class="form-group">
                <label>isi</label>
                <input id="isi" class="form-control" type="text" name="isi" value="<?php echo $isi?>" <?php echo $disableForm ?>>
            </div>             
                <input class="btn btn-primary" type="button" id="tombol" value="Simpan" <?php echo $disableForm ?>>   
        </form>
        
    </div>
    <?php 
    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const id = $('#id').val();
            const gambar = $('#gambar').val();
            const judul = $('#judul').val();
            const isi = $('#isi').val();

            $('#idd').text(id);
            $('#gbr').text(gambar);
            $('#jdl').text(judul);
            $('#isis').text(isi);
         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>
</body>
</html>