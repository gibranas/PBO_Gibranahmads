<?php
class Guru {
    var $nama_nama = array("de","ce","ve","re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}

class murid {
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;

}

class kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}

class Mobil {
    var $jumlah_roda=4;
    var $warna = "Merah";
    var $bahanbakar = "Pertamax";
    var $harga = 120000000;
    var $merek = "A";

    public function statusHarga()
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$ObjekBMW new Mobil; 
$ObjekTesla new Mobil;
$ObjekAudi new Mobil;