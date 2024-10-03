<?php
$hargaProduk = 120000;
$diskonPersentase = 20;

$jumlahDiskon = $hargaProduk * ($diskonPersentase / 100);
$hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;

echo "Harga yang harus dibayar: Rp " . $hargaSetelahDiskon;
?>
