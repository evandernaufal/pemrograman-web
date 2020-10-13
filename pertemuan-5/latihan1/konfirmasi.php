<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Matakuliah</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    if (isset($_POST['tombolsubmit'])){
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $sks = $_POST['sks'];
        
        $sql = "INSERT INTO matakuliah (kode, nama, kategori, sks)
        VALUES ('$kode','$nama','$kategori','$sks')";

        if (mysqli_query($conn, $sql)){
            echo "Data berhasil diinput";
        }else{
            echo $sql;
            echo "Data tidak berhasil diinput, dengan error: ".mysqli_error($conn); 
        }
?>
    kode : <?php echo $kode ?> <br>
    nama : <?php echo $nama ?> <br>
    kategori : <?php echo $kategori ?> <br>
    sks : <?php echo $sks ?> 
<?php
    }
    else{
        echo "Mohon maaf konfirmasi tidak bisa diakses langsung";
    }
?>
</body>
</html>