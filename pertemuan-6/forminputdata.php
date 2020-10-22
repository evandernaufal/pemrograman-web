<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
    <?php
        $namaServer = "localhost";
        $username = "root";
        $password = "";
        $namaDB = "weblanjut";
    
        //membuat koneksi
        $conn = mysqli_connect($namaServer, $username, $password, $namaDB);
        //check connection
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }
    
        if(isset($_POST['tombolsubmit'])){
            $namadepan=$_POST['namadepan'];
            $namabelakang=$_POST['namabelakang'];
            $email=$_POST['email'];

            //buat koneksi
            $strsql = "INSERT INTO forminput (namadepan, namabelakang, email)
            VALUES ('$namadepan', '$namabelakang', '$email')";
            
            if (mysqli_query($conn, $strsql)) {
                echo "Data Anda Berhasil Tersimpan di Database";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              mysqli_close($conn);
        }
    ?>
    <div class="container">
        <h2>Formulir</h2>
        <form method="post" action="forminputdata.php">
            <label>Nama Depan: </label><br>
            <input type="text" name="namadepan"><br>
            <label>Nama Belakang: </label><br>
            <input type="text"name="namabelakang"><br>
            <label>Email: </label><br>
            <input type="text"name="email"><br><br>
            <input type="submit" name="tombolsubmit" value="Simpan">
        </form> 
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>