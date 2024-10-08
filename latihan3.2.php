<?php
class Kendaraan {
    var $jumlahRoda = 4; 
    var $warna;
    var $bahanBakar = "Premium"; 
    var $harga = 100000000;
    var $tahunPembuatan = 2004;
    var $merek;

    function statusHarga() {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }

    function dapatSubsidi() {
        // Tambahkan logika subsidi di sini jika diperlukan
        return "Tidak ada subsidi"; // Contoh placeholder
    }

    function hargaSecondKendaraan() {
        // Tambahkan logika harga bekas di sini jika diperlukan
        return $this->harga * 0.7; // Contoh placeholder, harga bekas 70% dari harga baru
    }
}

$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->harga = 1000000; 
$objekKendaraan1->tahunPembuatan = 1999;
echo "Status Harga : " . $objekKendaraan1->statusHarga();

$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;
echo "<br>";
echo "Status BBM: " . $objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaSecondKendaraan();
?>
