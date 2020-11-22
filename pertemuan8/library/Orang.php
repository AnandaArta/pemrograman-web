<?php
class Orang {
    //Property
    protected $nama;
    protected $umur;

    //constructor
    // function __constructor($nama="Kosong", $umur="Kosong") {
        function Orang($nama="Kosong", $umur="Kosong") {
        $this->nama = $nama;
        $this->umur = $umur;
    }


    //method
    function set_nama($nama) {
        $this->nama = $nama;
    }
    function get_nama() {
        return $this->nama;
    }
    function set_umur($umur) {
        $this->umur = $umur;
    }
    function get_umur() {
        return $this->umur;
    }
}


?>