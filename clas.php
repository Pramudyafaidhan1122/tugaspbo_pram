<?php
class mahasiswa{
    public $nim = "05";
    public $nama = "Pramudya";
    public $jurusan = "pplg";

    function tampil_biodata(){
        echo $this->nim ;
        echo $this->nama ;
    }
}
$mahasiswa = new mahasiswa();

$mahasiswa->tampil_biodata()
?>