<?php
class Kendaraan
{
    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar = "Premium";
    var $harga = "100000000";
    var $merek;

    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }
}

$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->merek = "Yamaha MIO"; // Set properti
$objekKendaraan1->harga = 10000000; // Set properti

$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->merek = "Toyota Avanza"; // Set properti
$objekKendaraan2->harga = 100000000; // Set properti

$objekKendaraan3 = new Kendaraan();
$objekKendaraan3->merek = "Nissan GTR"; // Set properti
$objekKendaraan3->harga = 900000000; // Set properti

echo "Merek: " . $objekKendaraan1->merek; // Merek: Toyota Avanza
echo "<br/>";
echo "Nominal Harga: " . $objekKendaraan1->harga; // Nominal Harga: 100000000
echo "<br/>";
echo "Status Harga Kendaraan: " . $objekKendaraan1->statusHarga(); // Status Harga Kendaraan: Mahal

echo "Merek: " . $objekKendaraan2->merek; // Merek: Toyota Avanza
echo "<br/>";
echo "Nominal Harga: " . $objekKendaraan2->harga; // Nominal Harga: 100000000
echo "<br/>";
echo "Status Harga Kendaraan: " . $objekKendaraan2->statusHarga(); // Status Harga Kendaraan: Mahal

echo "Merek: " . $objekKendaraan3->merek; // Merek: Toyota Avanza
echo "<br/>";
echo "Nominal Harga: " . $objekKendaraan3->harga; // Nominal Harga: 100000000
echo "<br/>";
echo "Status Harga Kendaraan: " . $objekKendaraan3->statusHarga(); // Status Harga Kendaraan: Mahal
?>
