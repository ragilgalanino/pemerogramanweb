<!DOCTYPE html>
<html lang="en">
<?php
include_once "head.php";
?>
    <style>

</style>
    <body id="page-top">
        <!-- Navigation-->
        <?php 
      include_once "admin_header.php";
      include_once "koneksi.php";
    ?>
    <?php
    $strSQL = "SELECT * FROM about";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {   
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
        <section class="page-section bg-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase putih">About Me</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="bgimg w3-display-container w3-grayscale-min" id="home">
                  <img src="./assets/img/<?php echo $row["gambar"] ?>" style="width:100%">
                    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
                        <span class="w3-tag">14 April 2000</span>
                    </div>
                    <div class="w3-display-middle w3-center">
                        <span class="masthead-subheading putih" style="font-size:90px">Nino<br>Arsyad</span>
                    </div>
                    <div class="w3-display-bottomright w3-center w3-padding-large">
                        <span class="w3-text-white">Jakarta</span>
                    </div>
                </div>
            </div>
            <div class="w3-container">
                <div id="listtable" class="w3-content putih" style="max-width:700px">
                    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide tag-putih"><?php echo $row["judul"] ?></span></h5>
                    <p><?php echo $row["isi"] ?></p>
                </div>
            </div>
            <br>
            <br>
            <div class="text-center">
                    <a href="edit_about.php?id=<?php echo $row["id"] ?>" class="btn btn-dark btn-xl text-uppercase"><i class="fa fa-edit"></i>Edit</a>
             </div>
        </section>
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
        <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script>
        $(document).ready(function() {
        $('#listtable').DataTable();
    } );
    </script>
    </body>
</html>
