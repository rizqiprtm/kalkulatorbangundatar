<?php
$sisi = $_POST['sisi'];
$luas = $sisi * $sisi;

$galat = 0; // Inisialisasi galat dengan 0
$galatPerc = 0; // Inisialisasi galat dalam persen dengan 0

// Perhitungan galat jika Anda memiliki nilai referensi yang benar
$luasReferensi = $luas; // Gantilah dengan nilai referensi yang benar
$galat = abs($luas - $luasReferensi); // Hitung galat absolut
if ($luasReferensi != 0) {
    $galatPerc = ($galat / $luasReferensi) * 100; // Hitung galat dalam persen
}

echo "Sisi: $sisi<br>";
echo "Luas: $sisi x $sisi = $luas<br>";
echo "Galat: $galat<br>";
echo "Galat dalam Persen: $galatPerc%";
