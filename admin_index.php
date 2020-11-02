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
        <!-- Masthead-->
        <header class="masthead"> 
        <?php
              $strSQL = "SELECT * FROM home";
              $runStrSQL = mysqli_query($conn,$strSQL);
              $jmlRowData = mysqli_num_rows($runStrSQL);
              if ($jmlRowData < 0) {   
              }
              else {
                while($row = mysqli_fetch_assoc($runStrSQL)) {
            ?>
            <div class="container">
                <div class="masthead-subheading"><?php echo $row["subjudul"]?></div>
                <div class="masthead-heading text-uppercase"> <?php echo $row["judul"]?></div>
            </div>
            <div class="text-center">
            <a href="edit_home.php?id=<?php echo $row["id"] ?>" class="btn btn-dark btn-xl text-uppercase"><i class="fa fa-edit"></i>Edit</a>
            </div>
        </header>
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
