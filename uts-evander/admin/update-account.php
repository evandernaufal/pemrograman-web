<?php
     include_once "../koneksi.php";
     if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $strSQL = "UPDATE account SET password='$password' WHERE username='$username'";

        $runSQL = mysqli_query($conn, $strSQL);
        if ($runSQL) {
            header("location: account-adm.php");
        }  
        else {
            die; 
        }       
    }    
?>