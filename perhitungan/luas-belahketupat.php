<?php
$diagonal1 = $_POST['diagonal1'];
$diagonal2 = $_POST['diagonal2'];
$luas = ($diagonal1 * $diagonal2) / 2;

$galat = 0; // Inisialisasi galat dengan 0
$galatPerc = 0; // Inisialisasi galat dalam persen dengan 0

// Perhitungan galat jika Anda memiliki nilai referensi yang benar
$luasReferensi = $luas; // Gantilah dengan nilai referensi yang benar
$galat = abs($luas - $luasReferensi); // Hitung galat absolut
if ($luasReferensi != 0) {
    $galatPerc = ($galat / $luasReferensi) * 100; // Hitung galat dalam persen
}

echo "Diagonal 1: $diagonal1<br>";
echo "Diagonal 2: $diagonal2<br>";
echo "Luas: 1/2 x ($diagonal1 x $diagonal2) = $luas<br>";
echo "Galat: $galat<br>";
echo "Galat dalam Persen: $galatPerc%";
