<?php
$sisi1 = $_POST['sisi1'];
$sisi2 = $_POST['sisi2'];
$sisi3 = $_POST['sisi3'];
$keliling = $sisi1 + $sisi2 + $sisi3;

$galat = 0; // Inisialisasi galat dengan 0
$galatPerc = 0; // Inisialisasi galat dalam persen dengan 0

// Perhitungan galat jika Anda memiliki nilai referensi yang benar
$kelilingReferensi = $keliling; // Gantilah dengan nilai referensi yang benar
$galat = abs($keliling - $kelilingReferensi); // Hitung galat absolut
if ($kelilingReferensi != 0) {
    $galatPerc = ($galat / $kelilingReferensi) * 100; // Hitung galat dalam persen
}

echo "Sisi 1: $sisi1<br>";
echo "Sisi 2: $sisi2<br>";
echo "Sisi 3: $sisi3<br>";
echo "Keliling: $sisi1 + $sisi2 + $sisi3 = $keliling<br>";
echo "Galat: $galat<br>";
echo "Galat dalam Persen: $galatPerc%";
