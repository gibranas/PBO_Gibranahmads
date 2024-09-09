<?php
class kendaraan {
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merek;
    var $tahunpembuatan;
    var $platnomor;

    function setMerek($x) {
        $this->merek = $x;
    }

    function getMerek() {
        return $this->merek;
    }

    function setHarga($y) {
        $this->harga = $y;
    }

    function getHarga() {
        return $this->harga;
    }
    function getstatusharga() {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }
    function getStatusBBM() {
        if ($this->bahanbakar == "premium" && tahunpembuatan < 2005) {
            return 'Mendapat Subsidi';
        } else {
            return 'Tidak mendapat subsidi';
        }
    }

    function getHargabekas() {
        if ($this->tahunpembuatan > 2005) {
            return $this->harga * 0.8;
        } elseif ($this->tahunpembuatan > 2000) {
            return $this->harga * 0.7;
        } else {
            return $this->harga * 0.6;
        }
    }

    function getPajak() {
        if ($this->tahunpembuatan < 2017) {
            return  $this->harga * 0.025;
        }
        return  0;
    }
    function getHariOperasi($platNomor) {
        if ($this->platnomor % 2 == 1) {
            $harioperasi = "Senin, Rabu, Jumat, Minggu";
        } else if ($this->platnomor % 2== 0){
            $harioperasi = "Selasa, Kamis, Sabtu";
        }
        return $harioperasi;
    }
}

$kendaraan1 = new kendaraan;
$kendaraan1->setHarga(50000000);
$kendaraan1->bahanbakar = "Premium";
$kendaraan1->tahunpembuatan = 1999;
$kendaraan1->platnomor = 2128;


echo "Status Harga: " . $kendaraan1->getStatusHarga() . "<br>";
echo "Status BBM: " . $kendaraan1->getStatusBBM() . "<br>";
echo "Harga Bekas: Rp " . number_format($kendaraan1->getHargaBekas()) . "<br>";
echo "Jumlah Pajak: Rp " . number_format($kendaraan1->getPajak()) . "<br>";
echo "Hari Operasi: " . $kendaraan1->getHariOperasi($kendaraan1->platnomor) . "<br>";