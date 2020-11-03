<?php
     include_once "../koneksi.php";
     if (isset($_POST["webtitle"])) {
        $webtitle = $_POST["webtitle"];
        $title = $_POST["title"];
        $subtitle = $_POST["subtitle"];
        $judul1 = $_POST["judul1"];
        $dec1 = $_POST["dec1"];
        $link1 = $_POST["link1"];
        $judul2 = $_POST["judul2"];
        $dec2 = $_POST["dec2"];
        $link2 = $_POST["link2"];
        $cp1 = $_POST["cp1"];
        $deccp1 = $_POST["deccp1"];
        $linkcp1 = $_POST["linkcp1"];
        $cp2 = $_POST["cp2"];
        $deccp2 = $_POST["deccp2"];
        $linkcp2 = $_POST["linkcp2"];
        $id = $_POST["id"];
        $strSQL = "UPDATE creation SET webtitle='$webtitle', title='$title', subtitle='$subtitle', 
        judul1='$judul1', dec1='$dec1', link1='$link1', judul2='$judul2', dec2='$dec2', link2='$link2',
        cp1='$cp1', deccp1='$deccp1', linkcp1='$linkcp1', cp2='$cp2', deccp2='$deccp2', linkcp2='$linkcp2' WHERE id='$id'";

        $runSQL = mysqli_query($conn, $strSQL);
        if ($runSQL) {
            header("location: creation-adm.php");
        }  
        else {
            die; 
        }       
    }    
?>