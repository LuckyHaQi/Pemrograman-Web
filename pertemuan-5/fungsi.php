<?php
// Membuat Fungsi
function perkenalan($nama, $salam){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya "  . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda</br>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan("Luqman", "Halo");

echo "<hr>";

$saya = "Elok";
$salam = "Selamat pagi";

// Memanggil lagi
perkenalan($saya);
?>