<?php
class kendaraan {
var $jumlahroda;
var $warna;
var $bahanbakar;
var $harga;
var $merek;
var $tahunpembuatan;



function setMerek($x){
$this->merek = $x;
}
function getMerek(){
    return $this->merek ;
}
function setHarga($y){
    $this->harga = $y;
}
function getHarga(){
    return $this->harga;
}
}
$kendaraan1 = new kendaraan;
$kendaraan1->setMerek ('Yamaha MIO');
$kendaraan1->setharga (10000000);
echo $kendaraan1->getMerek();
echo "<br>";
echo $kendaraan1->getHarga();
?>
