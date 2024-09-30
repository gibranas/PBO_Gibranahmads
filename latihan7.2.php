<?php
class manusia {
    public $nama;
    public $umur;
    public $gender;
    
    function bicara() {
        echo "Selamat Datang";
    }

    function getInfo() {
        echo "Nama=" . $this->nama . "<br/>";
        echo "Umur=" . $this->umur . "<br/>";
        echo "JK=" . $this->gender . "<br/>";
    }
}

class ayah extends manusia {
    function pekerjaan() {
        echo "Pegawai Negeri Sipil<br/>";
    }
}

class ibu extends manusia {
    function pekerjaan() {
        echo "Ibu Rumah Tangga<br/>";
    }
}

class anak extends manusia {  
    function pekerjaan() {
        echo "Pelajar<br/>";
    }
}

$objekAyah = new ayah();
$objekAyah->nama = "Budi";
$objekAyah->gender = "Laki-laki";
$objekAyah->umur = "45";
echo "<b>Info Ayah</b><br/>";
$objekAyah->getInfo();
$objekAyah->pekerjaan();

$objekIbu = new ibu();
$objekIbu->nama = "Dini";
$objekIbu->gender = "Perempuan";  
$objekIbu->umur = "38";
echo "<b>Info Ibu</b><br/>";
$objekIbu->getInfo();
$objekIbu->pekerjaan();

$objekAnak = new anak();
$objekAnak->nama = "Ardi";
$objekAnak->gender = "Laki-laki";
$objekAnak->umur = "15";
echo "<b>Info Anak</b><br/>";
$objekAnak->getInfo();
$objekAnak->pekerjaan();
?>
