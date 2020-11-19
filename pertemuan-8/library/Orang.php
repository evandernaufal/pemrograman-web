<?php
    class Orang{
        //property
        protected $nama;
        protected $umur;

        //constructor
        function Orang($nama="kosong", $umur="kosong") {
            $this->nama = $nama;
            $this->umur = $umur;
        }

        //method
        function set_nama($nama){
            $this->nama = $nama;
        }
        function get_nama(){
            return $this->nama;
        }
        function set_umur($umur){
            $this->umur = $umur;
        }
        function get_umur(){
            return $this->umur;
        }
    }

?>