<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portofolio</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php 
          include_once "header.php";
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
                <img src="./assets/img/<?php echo $row["gambar"]?>" style="width:100%">
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
                                    <img class="img-fluid d-block mx-auto" src="./assets/img/<?php echo $row["gambar"]?>" alt="" />
                                    <a href="hapus_gambar.php?id_gambar=<?php echo $row["id_gambar"] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i>Hapus</a>
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
