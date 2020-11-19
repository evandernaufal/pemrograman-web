<?php
    class Orang{
        //property
        private $nama;
        private $umur;

        //constructor
        function Orang() {
            $this->nama = "{Belum diisi}";
            $this->umur = "{Belum diisi}";
        }

        //method
        function set_nama($n){
            $this->nama = $n;
        }
        function get_nama(){
            return $this->nama;
        }
        function set_umur($u){
            $this->umur = $u;
        }
        function get_umur(){
            return $this->umur;
        }
    }

    //object
    $objOrg = new Orang();

    //memanggil objek
    $objOrg->set_nama("Andi");
    echo "Nama Lengkap = ".$objOrg->get_nama();
    $objOrg->set_umur(20);
    echo "<br>Umur = ".$objOrg->get_umur()." tahun";
?>