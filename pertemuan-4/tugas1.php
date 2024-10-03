<?php
echo "Sebuah restoran memiliki 45 kursi di dalamnya.<br>Pada suatu malam,
28 kursi telah ditempati oleh pelanggan.<br>
Berapa persen kursi yang masih kosong di restoran tersebut? <br>";
$totalKursi = 45;
$SisaKursi = 28;
$KursiKosong = $totalKursi - $SisaKursi;
$presentaseKursi= ($KursiKosong /$totalKursi) * 100;
echo "Persen kursi yang kosong: {$presentaseKursi} % <br> ";
?>