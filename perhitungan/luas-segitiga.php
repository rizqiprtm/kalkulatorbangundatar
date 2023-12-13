<?php
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$luas = ($alas * $tinggi) / 2;

$galat = 0; // Inisialisasi galat dengan 0
$galatPerc = 0; // Inisialisasi galat dalam persen dengan 0

// Perhitungan galat jika Anda memiliki nilai referensi yang benar
$luasReferensi = $luas; // Gantilah dengan nilai referensi yang benar
$galat = abs($luas - $luasReferensi); // Hitung galat absolut
if ($luasReferensi != 0) {
    $galatPerc = ($galat / $luasReferensi) * 100; // Hitung galat dalam persen
}

echo "Alas: $alas<br>";
echo "Tinggi: $tinggi<br>";
echo "Luas: 1/2 x $alas x $tinggi = $luas<br>";
echo "Galat: $galat<br>";
echo "Galat dalam Persen: $galatPerc%";
