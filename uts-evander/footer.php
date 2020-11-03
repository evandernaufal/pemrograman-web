<footer class="footer py-4"  style="margin-bottom:30px;">
    <?php
        include_once "koneksi.php";
        $strSql = "SELECT * FROM setting";
        $result = mysqli_query($conn, $strSql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
    ?>  
    <div class="container"><hr>
        <div class="row">
            <h4>Copyright © FALEVAN | Conected with me on</h4>
            <a class="btn btn-dark btn-social" href=<?php echo $row["linkfb"] ?> target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-social" href=<?php echo $row["linkig"] ?> target="_blank"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-dark btn-social" href=<?php echo $row["linkgh"] ?> target="_blank"><i class="fab fa-github"></i></i></a>
        </div>
    </div>
    <?php
            }
        } else {
            echo "No Footer Here";
        }
    ?>
</footer>