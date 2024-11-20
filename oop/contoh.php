<?php

class Kucing {

    var $warna;
    var $jenis;

    public function makan(){

        echo "Kucing Suka Makan Whiskas";

    }

    public function minum(){

        echo "Kucing Suka Minum Air";

    }
}

$cetak = new Kucing();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

echo $cetak->warna = "Kuning";
echo "<br>";
echo $cetak->jenis = "Anggora";