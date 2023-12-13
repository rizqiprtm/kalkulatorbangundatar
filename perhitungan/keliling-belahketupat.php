<?php
$sisi = $_POST['sisi'];
$keliling = 4 * $sisi;

$galat = 0; // Inisialisasi galat dengan 0
$galatPerc = 0; // Inisialisasi galat dalam persen dengan 0

// Perhitungan galat jika Anda memiliki nilai referensi yang benar
$kelilingReferensi = $keliling; // Gantilah dengan nilai referensi yang benar
$galat = abs($keliling - $kelilingReferensi); // Hitung galat absolut
if ($kelilingReferensi != 0) {
    $galatPerc = ($galat / $kelilingReferensi) * 100; // Hitung galat dalam persen
}

echo "Sisi: $sisi<br>";
echo "Keliling: 4 x $sisi = $keliling<br>";
echo "Galat: $galat<br>";
echo "Galat dalam Persen: $galatPerc%";
