<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$max1 = $max2 = PHP_INT_MIN;
$min1 = $min2 = PHP_INT_MAX;

foreach ($nilai as $value) {
    if ($value > $max1) {
        $max2 = $max1;
        $max1 = $value;
    } elseif ($value > $max2) {
        $max2 = $value;
    }
    if ($value < $min1) {
        $min2 = $min1;
        $min1 = $value;
    } elseif ($value < $min2) {
        $min2 = $value;
    }
}

$totalNilai = 0;
$jumlahNilai = 0;

foreach ($nilai as $value) {
    if ($value != $max1 && $value != $max2 && $value != $min1 && $value != $min2) {
        $totalNilai += $value;
        $jumlahNilai++;
    }
}

echo "Total nilai: " . $totalNilai . "<br>";
$rataRata = $totalNilai / $jumlahNilai;
echo "Rata-rata nilai: " . $rataRata;
?>
