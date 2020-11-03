<?php
     include_once "../koneksi.php";
     if (isset($_POST["webtitle"])) {
        $webtitle = $_POST["webtitle"];
        $bghome = $_POST["bghome"];
        $subtitle = $_POST["subtitle"];
        $name = $_POST["name"];
        $linkfb = $_POST["linkfb"];
        $linkig = $_POST["linkig"];
        $linkgh = $_POST["linkgh"];
        $id = $_POST["id"];
        $strSQL = "UPDATE home SET webtitle='$webtitle', bghome='$bghome', subtitle='$subtitle', name='$name', linkfb='$linkfb', linkig='$linkig', linkgh='$linkgh' WHERE id='$id'";

        $runSQL = mysqli_query($conn, $strSQL);
        if ($runSQL) {
            header("location: admin.php");
        }  
        else {
            die; 
        }       
    }    
?>