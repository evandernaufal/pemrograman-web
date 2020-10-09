<?php
    /*
    VERSI PANJANGNYA

    if ($kota == 1) {
        $namaKota = "London";
    }
    elseif ($kota == 2) {
        $namaKota = "Paris";
    }
    elseif ($kota == 3) {
        $namaKota = "Tokyo";
    }
    else {
        $namaKota = "London";
    }
    */
    
    $namaKota = "London";
    if ($kota == 3) {
        $namaKota = "Tokyo";
    }
    elseif ($kota == 2) {
        $namaKota = "Paris";
    }
?>

<h1>
    <?php echo $namaKota; ?>
</h1>