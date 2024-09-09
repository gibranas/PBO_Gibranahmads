<?php
function hitungBiaya($kartu, $total_belanja) {
    $diskon = 0;

    switch ($kartu) {
        case 'Punya':
            if ($total_belanja > 500000) {
                $diskon = 50000;
            } elseif ($total_belanja > 100000) {
                $diskon = 15000;
            }
            break;

        case 'Tidak Punya':
            if ($total_belanja > 100000) {
                $diskon = 5000;
            }
            break;

        default:
            $diskon = 0;
            break;
    }

    $total_bayar = $total_belanja - $diskon;
    
    return array('diskon' => $diskon, 'total_bayar' => $total_bayar);
}

$pembeli = array(
    array('nama' => 'Pembeli 1', 'kartu' => 'Punya', 'belanja' => 200000),
    array('nama' => 'Pembeli 2', 'kartu' => 'Punya', 'belanja' => 570000),
    array('nama' => 'Pembeli 3', 'kartu' => 'Tidak Punya', 'belanja' => 120000),
    array('nama' => 'Pembeli 4', 'kartu' => 'Tidak Punya', 'belanja' => 90000),
);

foreach ($pembeli as $data) {
    $hasil = hitungBiaya($data['kartu'], $data['belanja']);
    echo "Nama Pembeli: " . $data['nama'] . "<br>";
    echo "Kartu Member: " . $data['kartu'] . "<br>";
    echo "Total Belanja: " . $data['belanja'] . "<br>";
    echo "Diskon: " . $hasil['diskon'] . "<br>";
    echo "Total Bayar: " . $hasil['total_bayar'] . "<br>";
    echo "<br>";
    
}
?>
