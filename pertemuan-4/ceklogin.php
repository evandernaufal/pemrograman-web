<?php
session_start();
    if (isset($_POST['tombolsubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "anto" && $password == "123"){
            //echo "Sukses";
            $_SESSION["sessionUsername"] = $username;
            header("Location: dashboard.php");
        }
        else{
            echo "Username/password ada yang salah";
        }
    }
    else{
        header("Username/password ada yang salah")
        //echo "Mohon maaf cek login tidak bisa diakses langsung";
    } 
?>
