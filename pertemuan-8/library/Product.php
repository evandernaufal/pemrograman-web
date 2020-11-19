<?php
    class Product{
        //property
        protected $kodeproduk;
        protected $namaproduk;

        //constructor
        function Orang($kodeproduk="kosong", $namaproduk="kosong") {
            $this->kodeproduk = $kodeproduk;
            $this->namaproduk = $namaproduk;
        }

        //method
        function set_kodeproduk($kodeproduk){
            $this->kodeproduk = $kodeproduk;
        }
        function get_kodeproduk(){
            return $this->kodeproduk;
        }
        function set_namaproduk($namaproduk){
            $this->namaproduk = $namaproduk;
        }
        function get_namaproduk(){
            return $this->namaproduk;
        }
    }

?>