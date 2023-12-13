<?php
$jarijari = $_POST['jarijari'];
$luas = 3.14 * $jarijari * $jarijari;

$galat = 0; // Inisialisasi galat dengan 0
$galatPerc = 0; // Inisialisasi galat dalam persen dengan 0

// Perhitungan galat jika Anda memiliki nilai referensi yang benar
$luasReferensi = 3.14 * $jarijari * $jarijari; // Gantilah dengan nilai referensi yang benar
$galat = abs($luas - $luasReferensi); // Hitung galat absolut
if ($luasReferensi != 0) {
    $galatPerc = ($galat / $luasReferensi) * 100; // Hitung galat dalam persen
}

echo "Jari-Jari: $jarijari<br>";
echo "Luas: 3.14 x $jarijari x $jarijari = $luas<br>";
echo "Galat: $galat<br>";
echo "Galat dalam Persen: $galatPerc%";
