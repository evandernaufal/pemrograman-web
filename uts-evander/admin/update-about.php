<?php
     include_once "../koneksi.php";
     if (isset($_POST["webtitle"])) {
        $webtitle = $_POST["webtitle"];
        $title = $_POST["title"];
        $subtitle = $_POST["subtitle"];
        $name = $_POST["name"];
        $avatar = $_POST["avatar"];
        $nickname = $_POST["nickname"];
        $dob = $_POST["dob"];
        $bp = $_POST["bp"];
        $gender = $_POST["gender"];
        $religion = $_POST["religion"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        $nationality = $_POST["nationality"];
        $mstatus = $_POST["mstatus"];
        $id = $_POST["id"];
        $strSQL = "UPDATE aboutme SET webtitle='$webtitle', title='$title', subtitle='$subtitle', name='$name', avatar='$avatar', nickname='$nickname', dob='$dob', bp='$bp', gender='$gender', religion='$religion', height='$height', weight='$weight', nationality='$nationality', mstatus='$mstatus' WHERE id='$id'";

        $runSQL = mysqli_query($conn, $strSQL);
        if ($runSQL) {
            header("location: about-adm.php");
        }  
        else {
            die; 
        }       
    }    
?>