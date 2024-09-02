<?php
class mahasiswa{
    var $nama;
    var $kelas;
    var $matakuliah;
    var $nilai;
    var $lulus;

    function setNama($nama){
        $this->nama=$nama;
    }
    function setKelas($kelas){
        $this->kelas=$kelas;
    }
    function setMatakuliah($matakuliah){
        $this->matakuliah=$matakuliah;
    }
    function setnilai($nilai){
        $this->nilai=$nilai;
    }
    function setlulus($lulus){
        if ($this->nilai > 75) $status = 'lulus';
        else $status = 'tidak lulus';
        return $status;
    }
}
$mahasiswa1 = array('Aditya', 'SI 2', 'PBO','80') ;
$mahasiswa2 = array('Shinta', 'SI 2', 'PBO','75') ;
$mahasiswa3 = array('Ineu','SI 2', 'PBO','55');

foreach ($mahasiswa1 as $m) {
    echo "Nama : " . $mahasiswa1[0]. "<br>";
    echo "Kelas : " . $mahasiswa1[1] . "<br>";
    echo "Mata Kuliah: " . $mahasiswa1[2] . "<br>";
    echo "Nilai: " . $mahasiswa1[3] . "<br>";
    echo "<br>";
}
?>