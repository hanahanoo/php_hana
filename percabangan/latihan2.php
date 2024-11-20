<?php

$nama = "Hana";
$jk = "Perempuan";
$jenis = "Makanan";
$menu = "Nasi Goreng";  
$jumlah = 6;


echo "Nama : $nama<br>";
echo "Jenis Kelamin : $jk<br>";
if($jenis == "Makanan") {
    echo "Jenis : Makanan<br>"; 
    if($menu == "Nasi Goreng") {
        echo "Menu : Nasi Goreng";
        echo "<br>";
        echo "Harga : 10.000<br>";
        echo "Jumlah : $jumlah<br>";
        echo "<hr>";
        $total = $jumlah * 10000;
        echo "Total : $total";
    } elseif ($menu == "Mie Goreng") {
        echo "Menu : Ayam Goreng";
        echo "<br>";
        echo "Harga : 15.000";
        echo "Jumlah : $jumlah<br>";
        echo "<hr>";
        $total = $jumlah * 15000;
        echo "Total : $total";
    } elseif($menu == "Ayam Goreng") {
        echo "Menu : Ayam Goreng";
        echo "<br>";
        echo "Harga : 20.000";
        echo "Jumlah : $jumlah<br>";
        echo "<hr>";
        $total = $jumlah * 20000;
        echo "Total : $total";
    } 

} elseif($jenis == "Minuman") {
    echo "Jenis : Minuman<br>";
    if($menu == "Air Mineral") {
        echo "Menu : Air Mineral";
        echo "<br>";
        echo "Harga : 5.000";
        echo "Jumlah : $jumlah<br>";
        echo "<hr>";
        $total = $jumlah * 5000;
        echo "Total : $total";
    } elseif($menu == "Fresh Tea") {
        echo "Menu : Fresh Tea";
        echo "<br>";
        echo "Harga : 7.000";
        echo "Jumlah : $jumlah<br>";
        echo "<hr>";
        $total = $jumlah * 7000;
        echo "Total : $total";
    } elseif($menu == "Jus") {
        echo "Menu : Jus";
        echo "<br>";
        echo "Harga : 12.000";
        echo "Jumlah : $jumlah<br>";
        echo "<hr>";
        $total = $jumlah * 12000;
        echo "Total : $total";
    } 
}

echo "<br>";

if($total >= 50000) {
    $diskon = $total * 0.2;
    echo "Diskon 20% : $diskon";
    echo "<br>";
    echo "<hr>";
    $totalbyr = $total - $diskon;
    echo "Total Bayar : $totalbyr";
}