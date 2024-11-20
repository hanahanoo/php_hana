<?php

$nama = "Hana";
$kelas = "XI RPL 1";

$nilai1 = 20;
$nilai2 = 40;
$nilai3 = 20;
$nilai4 = 40;
$rata2 = $nilai1 + $nilai2 + $nilai3 + $nilai4;
$rata2 /= 4;


echo "Nama  : $nama<br>";
echo "Kelas : $kelas<br>";
echo "Nilai B.Indonesia : $nilai1<br>";
echo "Nilai B.Inggris : $nilai2<br>";
echo "Matematika : $nilai3<br>";
echo "Produktif : $nilai4<br>";
echo "Rata-rata : $rata2";
echo "<hr>";
if($rata2 > 75) {
    echo "Status : Anda Lulus";
} else {
    echo "Status : Anda Tidak Lulus";
}


