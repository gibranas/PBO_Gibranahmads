Class Mobil {
    var $jumlahRoda = 4;
    var $warna = "Merah";
    var $bahanbakar = "pertamax";
    var $Harga = 120000000;
    var $Merek = 'A';


        public function statusHarga()
        {
            if ($this->harga > 50000000) $status = 'Mahal';
            else $status = 'Murah';
            return $status
        }
}