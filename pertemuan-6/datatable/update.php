<?php
     include_once "koneksi.php";
     if (isset($_POST["nim"])) {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $id = $_POST["id"];
        $strSQL = "UPDATE datamahasiswa SET nim='$nim', nama='$nama' WHERE id='$id'";
        $runSQL = mysqli_query($conn, $strSQL);       
        if ($runSQL) {
            header("location: listdatamahasiswa.php");
        }  
        else {
            $status = 0; //tidak sukses;
        }       
    }    
?>