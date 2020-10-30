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
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase putih">Portfolio</h2>
                    <h3 class="section-subheading text-muted"> </h3>
                </div>
                <div class="row">
                <?php
                $strSQL = "SELECT * FROM portofolio";
                $runStrSQL = mysqli_query($conn,$strSQL);
                $jmlRowData = mysqli_num_rows($runStrSQL);
                if ($jmlRowData < 0) {    
                }
                else {
                while($row = mysqli_fetch_assoc($runStrSQL)) {
                 ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#porto<?php echo $row["id_porto"]?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/<?php echo $row["gambar"] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $row["judul"] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $row["subjudul"] ?></div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            }
                ?>

            </div>
        </section>
        <!-- Footer-->
        <?php 
      include_once "footer.php";
    ?>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <?php
    //buat sql
    $strSQL = "SELECT * FROM portofolio";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {   
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
        <div class="portfolio-modal modal fade" id="porto<?php echo $row["id_porto"]?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $row["judul"]?></h2>
                                    <p class="item-intro text-muted"><?php echo $row["subjudul"]?></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/<?php echo $row["gambar"]?>" alt="" />
                                    <p><?php echo $row["isi"]?></p>
                                    <div class="text-center">
                                        <a href="edit_porto.php?id_porto=<?php echo $row["id_porto"] ?>" class="btn btn-dark btn-xl text-uppercase"><i class="fa fa-edit"></i>Edit</a>                                
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
