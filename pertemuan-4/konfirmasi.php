<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Pendaftaran</title>
</head>
<body>
<?php
    if (isset($_POST['tombolsubmit'])){
        $username = $_POST['username'];
        $namadepan = $_POST['namadepan'];
        $namabelakang = $_POST['namabelakang'];
        $email = $_POST['email'];
?>
    username : <?php echo $username ?> <br>
    password : ***** <br>
    nama lengkap : <?php echo $namadepan." ".$namabelakang  ?> <br>
    email : <?php echo $email ?> 
<?php
    }
?>

</body>
</html>