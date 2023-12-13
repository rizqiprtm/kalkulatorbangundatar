<?php
$alas = $_POST['alas'];
$miring = $_POST['miring'];
$keliling = 2 * ($alas + $miring);

$galat = 0; // Inisialisasi galat dengan 0
$galatPerc = 0; // Inisialisasi galat dalam persen dengan 0

// Perhitungan galat jika Anda memiliki nilai referensi yang benar
$kelilingReferensi = $keliling; // Gantilah dengan nilai referensi yang benar
$galat = abs($keliling - $kelilingReferensi); // Hitung galat absolut
if ($kelilingReferensi != 0) {
    $galatPerc = ($galat / $kelilingReferensi) * 100; // Hitung galat dalam persen
}

echo "Alas: $alas<br>";
echo "Miring: $miring<br>";
echo "Keliling: 2 x ($alas + $miring) = $keliling<br>";
echo "Galat: $galat<br>";
echo "Galat dalam Persen: $galatPerc%";
