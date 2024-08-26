<?php

class Celsius {
    public function konversi($suhu) {
        return [
            'fahrenheit' => ($suhu * 9 / 5) + 32,
            'kelvin' => $suhu + 273.15,
            'reamur' => $suhu * 4 / 5,
        ];
    }
}

class Fahrenheit {
    public function konversi($suhu) {
        return [
            'reamur' => ($suhu - 32) * 4 / 9,
            'kelvin' => ($suhu - 32) * 5 / 9 + 273.15,
            'celsius' => ($suhu - 32) * 5 / 9,
        ];
    }
}

class Kelvin {
    public function konversi($suhu) {
        return [
            'fahrenheit' => ($suhu - 273.15) * 9 / 5 + 32,
            'celsius' => $suhu - 273.15,
            'reamur' => ($suhu - 273.15) * 4 / 5,
        ];
    }
}

class Reamur {
    public function konversi($suhu) {
        return [
            'celsius' => $suhu * 5 / 4,
            'kelvin' => ($suhu * 5 / 4) + 273.15,
            'fahrenheit' => ($suhu * 9 / 4) + 32,
        ];
    }
}

// Contoh penggunaan
$suhu = 30;

$celsiusConverter = new Celsius();
$fahrenheitConverter = new Fahrenheit();
$kelvinConverter = new Kelvin();
$reamurConverter = new Reamur();

echo "Konversi dari Celsius:\n";
print_r($celsiusConverter->konversi($suhu));

echo "Konversi dari Fahrenheit:\n";
print_r($fahrenheitConverter->konversi($suhu));

echo "Konversi dari Kelvin:\n";
print_r($kelvinConverter->konversi($suhu));

echo "Konversi dari Reamur:\n";
print_r($reamurConverter->konversi($suhu));
?>
