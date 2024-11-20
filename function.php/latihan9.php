<?php

function segitiga($alas,$tinggi,$a){
    echo "<b>Segitiga</b><br>";
    echo "Alas : $alas<br>";
    echo "Tinggi : $tinggi<br>";
    echo "Rumus : 1/2 (Alas x Tinggi)<br>";
    $hasil = $alas * $tinggi / 2;
    echo "Hasilnya : $hasil<br>";

}

function persegi($sisi1,$sisi2){
    echo "<b>Persegi</b><br>";
    echo "Sisi ke 1 : $sisi1<br>";
    echo "Sisi ke 2: $sisi2<br>";
    echo "Rumus : Sisi x Sisi<br>";
    $hasil = $sisi1 * $sisi2;
    echo "Hasilnya : $hasil<br>";

}

function persegi_panjang($panjang,$lebar){
    echo "<b>Persegi Panjang</b><br>";
    echo "Panjang : $panjang<br>";
    echo "Lebar : $lebar<br>";
    echo "Rumus : Panjang x Lebar<br>";
    $hasil = $panjang * $lebar;
    echo "Hasilnya : $hasil<br>";
}

function lingkaran($pi,$r){
    echo "<b>Lingkaran</b><br>";
    echo "Phi : $pi<br>";
    echo "Jari-Jari : $r<br>";
    echo "Rumus : Phi x r x r<br>";
    $hasil = $pi * $r * $r;
    echo "Hasilnya : $hasil<br>";
}
segitiga(10,20,2);
echo "<hr>";
persegi(30,30);
echo "<hr>";
persegi_panjang(80,90);
echo "<hr>";
lingkaran(3.14,7);