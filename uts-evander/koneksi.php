<?php
    $namaServer = "localhost";
    $username = "root";
    $password = "";
    $namaDB = "utsevander";

    //create connection
    $conn = mysqli_connect($namaServer, $username, $password, $namaDB);
    //check connection
    if(!$conn){
        die("Bad Connection");
    }
?>