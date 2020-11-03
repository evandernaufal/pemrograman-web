<?php
     include_once "../koneksi.php";
     if (isset($_POST["webtitle"])) {
        $webtitle = $_POST["webtitle"];
        $title = $_POST["title"];
        $subtitle = $_POST["subtitle"];
        $widthwd = $_POST["widthwd"];
        $widthpp = $_POST["widthpp"];
        $widthpc = $_POST["widthpc"];
        $widthaa = $_POST["widthaa"];
        $widthse = $_POST["widthse"];
        $id = $_POST["id"];
        $strSQL = "UPDATE skills SET webtitle='$webtitle', title='$title', subtitle='$subtitle', widthwd='$widthwd', widthpp='$widthpp', widthpc='$widthpc', widthaa='$widthaa', widthse='$widthse' WHERE id='$id'";
        
        $runSQL = mysqli_query($conn, $strSQL);
        if ($runSQL) {
            header("location: skills-adm.php");
        }  
        else {
            die; 
        }       
    }    
?>