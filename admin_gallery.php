<!DOCTYPE html>
<html lang="en">
<?php
include_once "head.php";
?>
    <body id="page-top">
        <!-- Navigation-->
        <?php 
          include_once "admin_header.php";
          include_once "koneksi.php";
        ?>
          <section class="page-section bg-light" id="gallery">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase putih">Gallery</h2>
                    <h3 class="section-subheading text-muted">Koleksi Foto Nino</h3>
                </div>
                <div class="w3-row-padding" style="margin-bottom:128px">
            <div class="row">
            <?php
              $strSQL = "SELECT * FROM gallery";
              $runStrSQL = mysqli_query($conn,$strSQL);
              $jmlRowData = mysqli_num_rows($runStrSQL);
              if ($jmlRowData < 0) {   
              }
              else {
                while($row = mysqli_fetch_assoc($runStrSQL)) {
            ?>
              <div class="col-sm-6">
              <a class="portfolio-link" data-toggle="modal" href="#gambar<?php echo $row["id_gambar"]?>">
                <img src="./assets/img/gallery/<?php echo $row["gambar"]?>" style="width:100%">
               </a> 
              </div>
              

            <?php
                }
              }
            ?>
            
            </div>
            </div>
            <div class="text-center">
              <a href="tambah_gambar.php" class="btn btn-dark btn-xl text-uppercase"><i></i>Tambah Gambar</a>                                
            </div>
        </section>
        <?php
        $strSQL = "SELECT * FROM gallery";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {   
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
        <div class="portfolio-modal modal fade" id="gambar<?php echo $row["id_gambar"]?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <img class="img-fluid d-block mx-auto" src="./assets/img/gallery/<?php echo $row["gambar"]?>" alt="" />
                                    <a href="hapus_gambar.php?id_gambar=<?php echo $row["id_gambar"] ?>" class="btn btn-danger btn-xl text-uppercase"> <i class="fa fa-trash"></i>Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    <!-- Footer-->
        <?php 
      include_once "footer.php";
    ?>
            <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
