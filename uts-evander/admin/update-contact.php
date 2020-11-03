<?php
     include_once "../koneksi.php";
     if (isset($_POST["webtitle"])) {
        $webtitle = $_POST["webtitle"];
        $title = $_POST["title"];
        $subtitle = $_POST["subtitle"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $id = $_POST["id"];
        $strSQL = "UPDATE contact SET webtitle='$webtitle', title='$title', subtitle='$subtitle', address='$address', email='$email', phone='$phone' WHERE id='$id'";
        
        $runSQL = mysqli_query($conn, $strSQL);
        if ($runSQL) {
            header("location: contact-adm.php");
        }  
        else {
            die; 
        }       
    }    
?>