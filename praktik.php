<?php
class Angsuran {
   var $Pinjaman = 1000000 ;
   var $bunga = 10 ; 
   var $lamaAngsuran = 5;
   var $angsuranPerBulan;
   var $dendaPerHari;
   function __construct($Pinjaman, $bunga, $lamaAngsuran, $dendaPerHari) {
       $this->Pinjaman = $Pinjaman;
       $this->bunga = $bunga;
       $this->lamaAngsuran = $lamaAngsuran;
       $this->dendaPerHari = $dendaPerHari;
     
   }
   function hitungAngsuranPerBulan() {
       $totalPinjaman = $this->Pinjaman * ($this->bunga / 100);
       $this->angsuranPerBulan = $totalPinjaman / $this->lamaAngsuran;
   }
   function hitungDenda($hariTerlambat) {
       return $hariTerlambat * ($this->angsuranPerBulan * $this->dendaPerHari / 100);
   }
   function totalPembayaran($hariTerlambat) {
       $denda = $this->hitungDenda($hariTerlambat);
       return $this->angsuranPerBulan + $denda;
   }
}
 
$Pinjaman = 1000000;
$bunga = 10;
$lamaAngsuran = 5;
$dendaPerHari = 0.15;

$penghitung = new Angsuran($Pinjaman, $bunga, $lamaAngsuran, $dendaPerHari);
$hariTerlambat = 40;
$dendaKeterlambatan = $penghitung->hitungDenda($hariTerlambat);
$totalPembayaran = $penghitung->totalPembayaran($hariTerlambat);

echo ("Toko Pegadaian Syariah")."<br>";
echo ("Jl Keadilan No.16")."<br>";
echo ("Telp.72353459")."<br>";
echo "Besaran Pinjaman: Rp. " . ($Pinjaman) . "<br>";
echo "Bunga: " . $bunga . "%<br>";
echo "Total Pinjaman: Rp. " . ($Pinjaman * (1 + $bunga / 100)) . "<br>";
echo "Lama Angsuran: " . $lamaAngsuran . " bulan<br>";
echo "Besaran Angsuran per Bulan: Rp. " . ($penghitung->angsuranPerBulan) . "<br>";
echo "Keterlambatan Angsuran (Hari): " . $hariTerlambat . "<br>";
echo "Denda Keterlambatan: Rp. " . ($dendaKeterlambatan) . "<br>";
echo "Besaran Pembayaran: Rp. " . ($totalPembayaran) . "<br>";
?>