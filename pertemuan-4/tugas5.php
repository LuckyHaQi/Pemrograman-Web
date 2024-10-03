<?php
$siswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

$total_nilai = 0;
$jumlah_siswa = count($siswa);
for ($i = 0; $i < $jumlah_siswa; $i++) {
    $total_nilai += $siswa[$i][1]; 
}
$rata_rata = $total_nilai / $jumlah_siswa;

echo "Rata-rata kelas: $rata_rata<br>";
echo "Daftar siswa yang mencapai nilai di atas rata-rata:<br>";

for ($i = 0; $i < $jumlah_siswa; $i++) {
    if ($siswa[$i][1] > $rata_rata) {
        echo $siswa[$i][0] . " dengan nilai " . $siswa[$i][1] . "<br>";
    }
}
?>