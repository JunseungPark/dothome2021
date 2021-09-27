<?php
    $host = "localhost";
    $user = "dpfwl8745";
    $pass = "wnsrb1#wnstmd";
    $db = "dpfwl8745";

    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if( mysqli_connect_errno()){
        // echo "Database Connect Fales";
    } else {
        //echo "Database Connect True";
    }
?>
