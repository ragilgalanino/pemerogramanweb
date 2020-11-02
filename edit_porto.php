<!DOCTYPE html>
<html lang="en">
<?php
include_once "head.php";
?>
<body>
    <?php   
    include_once "koneksi.php"; 
    $status = 2;  
    if (isset($_POST['id_porto'])) {

        $id_porto = $_POST['id_porto']; 
        $gambar = $_POST['gambar'];
        $judul = $_POST['judul'];
        $subjudul = $_POST['subjudul'];
        $isi = $_POST['isi'];

         //buat koneksi
         $strSQL = "UPDATE portofolio SET 
         gambar='".$gambar."', 
         judul='".$judul."',
         subjudul='".$subjudul."',
         isi='".$isi."' WHERE id_porto='".$id_porto."'";
        // echo $strSQL;
       // die;
         $runSQL = mysqli_query($conn,$strSQL);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }      
         header("refresh:3; url=admin_portofolio.php"); 
    }        
    else if (isset($_GET['id_porto'])) {
        $id_porto = $_GET['id_porto'];
        $strSQL = "SELECT * FROM portofolio WHERE id_porto='".$id_porto."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $gambar = $row["gambar"];
                $judul = $row["judul"];
                $subjudul = $row["subjudul"];
                $isi = $row["isi"];
            }
        }
    }  
    else {       
        $gambar = "";
        $judul = "";
        $subjudul = "";
        $iai = "";
        $id_porto = "";
    }  
    $disableForm = isset($_GET['id_porto']) ? "enabled": "disabled";
    ?>
    <div class="container">
        <h2>Edit Portofolio</h2> 
        <!-- Ini Modal -->
<div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pendaftaran</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"><b>id</b></div>
                                <div class="col-6"><span id="idd"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Gambar</b></div>
                                <div class="col-6"><span id="gbr"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Judul</b></div>
                                <div class="col-6"><span id="jdl"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>SubJudul</b></div>
                                <div class="col-6"><span id="sjdl"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>isi</b></div>
                                <div class="col-6"><span id="isis"></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                        <button id="proses1" type="button" class="btn btn-dark" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- ini end modal -->  

        <?php 
            if ($status == 1) {
        ?>    
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data berhasil diinput ke dalam database.
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
        <form id="myform1" method="post" action="edit_porto.php">
            <div class="form-group">
                <label>id</label>
                <input id="id_porto" class="form-control" type="text" name="id_porto" value="<?php echo $id_porto ?>" readonly 
                <?php echo $disableForm ?>>
            </div>
            <div class="form-group">
                <label>gambar</label>
                <input id="gambar" class="form-control" type="text" name="gambar" value="<?php echo $gambar?>"<?php echo $disableForm ?>>
            </div>
            <div class="form-group">
                <label>judul</label>
                <input id="judul" class="form-control" type="text" name="judul" value="<?php echo $judul?>" <?php echo $disableForm ?>>
            </div>  
            <div class="form-group">
                <label>subjudul</label>
                <input id="subjudul" class="form-control" type="text" name="subjudul" value="<?php echo $subjudul?>" <?php echo $disableForm ?>>
            </div> 
            <div class="form-group">
                <label>isi</label>
                <input id="isi" class="form-control" type="text" name="isi" value="<?php echo $isi?>" <?php echo $disableForm ?>>
            </div>             
                <input class="btn btn-dark" type="button" id="tombol1" value="Simpan" <?php echo $disableForm ?>>   
                <a href="admin_portofolio.php" class="btn btn-danger">Kembali</a>
        </form>
        
    </div>
    <?php 
     include_once "footer.php";
    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses1').click(function(){
            $('#myform1').submit();
        });
        $('#tombol1').click(function(){
            //ambil data dari form
            const id_porto = $('#id_porto').val();
            const gambar = $('#gambar').val();
            const judul = $('#judul').val();
            const subjudul = $('#subjudul').val();
            const isi = $('#isi').val();

            $('#idd').text(id_porto);
            $('#gbr').text(gambar);
            $('#jdl').text(judul);
            $('#sjdl').text(subjudul);
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