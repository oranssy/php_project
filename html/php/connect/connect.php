<?php
    $host = "localhost";
    $user = "oranssy";
    $pass = "edu145t#";
    $db = "oranssy";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    // if(mysqli_connect_errno()){
    //     echo "Database Connect False";
    // } else {
    //     echo "Database Connect True";
    // }

    // http://earth52.dothome.co.kr/

    // $host = "localhost";
    // $user = "earth52";
    // $pass = "love25r!";
    // $db = "earth52";
    // $connect = new mysqli($host, $user, $pass, $db);
    // $connect -> set_charset("utf8");
?>