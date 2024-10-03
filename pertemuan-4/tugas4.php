<?php
$poin = 600;

$totalSkor = $poin;
$hadiahTambahan = $totalSkor > 500 ? "YA" : "TIDAK";

echo "Total skor pemain: " . $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan;
?>
