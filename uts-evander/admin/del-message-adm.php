<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
    include '../koneksi.php';
    if (isset($_GET["id"])) {
        $id   = $_GET['id'];
        $strsql="DELETE from messageadmin where id='".$id."'";
        $runSQL = mysqli_query($conn, $strsql);       
        if ($runSQL) {
            echo "<div id='sukses' class='alert alert-success alert-dismissible fade show'>";
            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
            echo "Data Success Delete from Database. Your Page will redirect in 3 secons!";
            echo "</div>";
            header("refresh:3; url=message-adm.php");
        }  
        else {
            echo "<div id='sukses' class='alert alert-danger alert-dismissible fade show'>";
            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
            echo "Data Not Success Delete from Database. Your Page will redirect in 3 secons!";
            echo "</div>";
            header("refresh:3; url=message-adm.php");
        }  
    }else {
        echo "Gagal";
    }
?>