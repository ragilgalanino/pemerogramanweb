<?php
    if (isset($_POST['tombolsubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $namadepan = $_POST['namadepan'];
        $namabelakang = $_POST['namabelakang'];
        $email = $_POST['email'];

        echo "Nama Lengkap : ".$namadepan, " ".$namabelakang ;
        echo "<br>Email : ".$email;
        echo "<br>Username : ".$username;
    }
    else{
        echo "Mohon maaf belum dapat mendaftar";
    }
?>