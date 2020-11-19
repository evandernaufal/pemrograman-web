<?php
    include "../library/Orang.php";

    class Mahasiswa extends Orang{
        //property
        private $nim;
        private $angkatan;
        private $jurusan;

        //constructor
        function Mahasiswa($nim="kosong",$nama="kosong",$umur="kosong",$angkatan="kosong",$jurusan="kosong"){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->umur = $umur;
            $this->angkatan = $angkatan;
            $this->jurusan = $jurusan;
        }

        //method
        function set_nim($nim){
            $this->nim = $nim;
        }
        function get_nim(){
            return $this->nim;
        }
        function set_angkatan($angkatan){
            $this->angkatan = $angkatan;
        }
        function get_angkatan(){
            return $this->angkatan;
        }
        function set_jurusan($jurusan){
            $this->jurusan = $jurusan;
        }
        function get_jurusan(){
            return $this->jurusan;
        }
        function info() {
            echo "NIM: ".$this.nim;
            echo "<br>Nama: ".$this.nama;
            echo "<br>Umur: ".$this.umur;
            echo "<br>Angkatan: ".$this.angkatan;
            echo "<br>Jurusan: ".$this.jurusan;
        }

    }
?>