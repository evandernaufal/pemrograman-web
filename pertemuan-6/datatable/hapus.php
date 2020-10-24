<?php
    include 'koneksi.php';
    if (isset($_GET["id"])) {
        $id   = $_GET['id'];
        // query SQL untuk insert data
        $strsql="DELETE from datamahasiswa where id='".$id."'";
        $runSQL = mysqli_query($conn, $strsql);       
        if ($runSQL) {
            $status = 1; //sukses
        }  
        else {
            $status = 0; //tidak sukses;
        }  
    }else {
        echo "Gagal";
    }
    header("location:listdatamahasiswa.php");
?>