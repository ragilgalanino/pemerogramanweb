<!DOCTYPE html>
<html lang="en">
<?php
include_once "head.php";
?>
    <style>
    body,h1 {font-family: "Raleway", Arial, sans-serif}
    h1 {letter-spacing: 6px}
    .w3-row-padding img {margin-bottom: 12px}
    </style>
    <body id="page-top">
        <!-- Navigation-->
        <?php 
      include_once "header.php";
      include_once "koneksi.php";
    if (isset($_POST['tombol'])) {
        $nama = $_POST['nama']; 
        $email = $_POST['email'];
        $isi = $_POST['isi']; 

         //buat koneksi
         $strsql = "INSERT INTO contact (nama, email,  isi) 
         VALUES ('$nama','$email','$isi')";
         
         $runSQL = mysqli_query($conn,$strsql);        
         if ($runSQL) {
            $status = 1; //sukses
        }  
        else {
            $status = 0; //tidak sukses;
        } 
      
    }   
    ?>
         <section class="page-section bg-light" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Me</h2>
                    <h3 class="section-subheading text-muted">Kalo Ada Keluh Kesah.</h3>
                </div>
                <form id="myform" method="post" action="contact.php" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="nama" name="nama" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="isi" name="isi" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-dark btn-xl text-uppercase" id="tombol" name="tombol" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
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
