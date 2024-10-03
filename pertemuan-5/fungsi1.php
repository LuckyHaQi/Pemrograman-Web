<?php
// Membuat Fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2005, 2024) . " tahun" 
// Isi sesuai dengan tahun lahir kalian
?>