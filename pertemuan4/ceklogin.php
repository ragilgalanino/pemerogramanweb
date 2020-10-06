<?php

if (isset($_POST['tombolsubmit'])){
    $namadpn = $_POST['namadpn'];
    $namablk = $_POST['namablk'];
    $username = $_POST['username'];
    $email = $_POST['email'];


    echo $username;
    echo "<br>" .$email;
    echo "<br> ".$namadpn." ".$namablk;
}


?>