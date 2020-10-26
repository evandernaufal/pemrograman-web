<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <?php   
        include_once "header.php";
        include_once "koneksi.php";    
        if (isset($_GET['id'])) {
            $_id = $_GET['id'];
            $strSQL = "SELECT * FROM datamahasiswa WHERE id='$_id'";
            $runStrSQL = mysqli_query($conn,$strSQL);
            $jmlRowData = mysqli_num_rows($runStrSQL);
            if ($jmlRowData > 0) {
                while ($row = mysqli_fetch_assoc($runStrSQL)) {
                    $nim = $row["nim"];
                    $nama = $row["nama"];
                    $id = $row["id"];
                }
            }
        }
    ?>
    <div class="container">
        <h2>Edit Data Mahasiswa</h2>   
        <!-- Ini Modal -->
        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pengeditan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"><b>NIM</b></div>
                                <div class="col-6"><span id="nm"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Nama Mahasiswa</b></div>
                                <div class="col-6"><span id="nma"></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                        <button id="proses" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ini end modal -->
        <form id="myform" method="post" action="update.php">
            <div class="form-group">
                <label>NIM</label>
                <input id="id" class="form-control" type="hidden" name="id" value="<?php echo $id ?>">
                <input id="nim" class="form-control" type="text" name="nim" value="<?php echo $nim ?>">
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input id="nama" class="form-control" type="text" name="nama" value="<?php echo $nama ?>" >
            </div>
            <input class="btn btn-primary" type="button" id="tombol" value="Simpan" >   
        </form>
    </div>
    <?php 
        include_once "footer.php";
    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const nim = $('#nim').val();
            const nama = $('#nama').val();

            $('#nm').text(nim);
            $('#nma').text(nama);
         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    </script>
</body>
</html>