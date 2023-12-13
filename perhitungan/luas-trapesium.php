<?php
$sisi1 = $_POST['sisi1'];
$sisi2 = $_POST['sisi2'];
$tinggi = $_POST['tinggi'];
$luas = (($sisi1 + $sisi2) * $tinggi) / 2;

$galat = 0; // Inisialisasi galat dengan 0
$galatPerc = 0; // Inisialisasi galat dalam persen dengan 0

// Perhitungan galat jika Anda memiliki nilai referensi yang benar
$luasReferensi = $luas; // Gantilah dengan nilai referensi yang benar
$galat = abs($luas - $luasReferensi); // Hitung galat absolut
if ($luasReferensi != 0) {
    $galatPerc = ($galat / $luasReferensi) * 100; // Hitung galat dalam persen
}

echo "Sisi 1: $sisi1<br>";
echo "Sisi 2: $sisi2<br>";
echo "Tinggi: $tinggi<br>";
echo "Luas: 1/2 x ($sisi1 + $sisi2) x $tinggi = $luas<br>";
echo "Galat: $galat<br>";
echo "Galat dalam Persen: $galatPerc%";
