<?php
$diameter = $_POST['diameter'];
$keliling = 3.14 * $diameter;
echo "<br/>K = phi x d<br/>K = 3.14 x $diameter<br>K = $keliling";
?><?php
    $diameter = $_POST['diameter'];
    $keliling = 3.14 * $diameter;

    $galat = 0; // Inisialisasi galat dengan 0
    $galatPerc = 0; // Inisialisasi galat dalam persen dengan 0

    // Perhitungan galat jika Anda memiliki nilai referensi yang benar
    $kelilingReferensi = 3.14 * $diameter; // Gantilah dengan nilai referensi yang benar
    $galat = abs($keliling - $kelilingReferensi); // Hitung galat absolut
    if ($kelilingReferensi != 0) {
        $galatPerc = ($galat / $kelilingReferensi) * 100; // Hitung galat dalam persen
    }

    echo "Diameter: $diameter<br>";
    echo "Keliling: 3.14 x $diameter = $keliling<br>";
    echo "Galat: $galat<br>";
    echo "Galat dalam Persen: $galatPerc%";
    ?>
