<?php
     include_once "../koneksi.php";
     if (isset($_POST["webtitle"])) {
        $webtitle = $_POST["webtitle"];
        $title = $_POST["title"];
        $subtitle = $_POST["subtitle"];
        $yeartk = $_POST["yeartk"];
        $namatk = $_POST["namatk"];
        $dectk = $_POST["dectk"];
        $yearsd = $_POST["yearsd"];
        $namasd = $_POST["namasd"];
        $decsd = $_POST["decsd"];
        $yearsmp = $_POST["yearsmp"];
        $namasmp = $_POST["namasmp"];
        $decsmp = $_POST["decsmp"];
        $yearsma = $_POST["yearsma"];
        $namasma = $_POST["namasma"];
        $decsma = $_POST["decsma"];
        $yearpt = $_POST["yearpt"];
        $namapt = $_POST["namapt"];
        $decpt = $_POST["decpt"];
        $id = $_POST["id"]; 
        $strSQL = "UPDATE myeducation SET webtitle='$webtitle', title='$title', subtitle='$subtitle', yeartk='$yeartk', 
        namatk='$namatk', dectk='$dectk', yearsd='$yearsd', namasd='$namasd', decsd='$decsd', yearsmp='$yearsmp', 
        namasmp='$namasmp', decsmp='$decsmp', yearsma='$yearsma', namasma='$namasma', 
        decsma='$decsma', yearpt='$yearpt', namapt='$namapt', decpt='$decpt' WHERE id='$id'";
        
        $runSQL = mysqli_query($conn, $strSQL);
        if ($runSQL) {
            header("location: myeducation-adm.php");
        }  
        else {
            die; 
        }       
    }    
?>