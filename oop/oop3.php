<?php

class bangun_datar{

    public $hasil1;
    public $hasil2;
    public $hasil3;
    public $hasil4;

    public function segitiga($alas,$tinggi){
        echo "<b>Segitiga</b><br>";
        echo "Alas : $alas<br>";
        echo "Tinggi : $tinggi<br>";
        echo "Rumus : 1/2 (Alas x Tinggi)<br>";
        $this->hasil1 = $alas * $tinggi / 2;
        echo "Hasilnya : $this->hasil1<hr>";
    
    }

    public function lingkaran($r){
        echo "<b>Lingkaran</b><br>";
        $pi = 3.14;
        echo "Phi : $pi<br>";
        echo "Jari-Jari : $r<br>";
        echo "Rumus : Phi x r x r<br>";
        $this->hasil2 = $pi * $r * $r;
        echo "Hasilnya : $this->hasil2<hr>";
    }

    public function persegi($sisi){
        echo "<b>Persegi</b><br>";
        echo "Sisi : $sisi<br>";
        echo "Rumus : Sisi x Sisi<br>";
        $this->hasil3 = $sisi * $sisi;
        echo "Hasilnya : $this->hasil3<hr>";
    
    }

    public function persegi_panjang($panjang,$lebar){
        echo "<b>Persegi Panjang</b><br>";
        echo "Panjang : $panjang<br>";
        echo "Lebar : $lebar<br>";
        echo "Rumus : Panjang x Lebar<br>";
        $this->hasil4 = $panjang * $lebar;
        echo "Hasilnya : $this->hasil4<hr>";
    }
}


$cetak = new bangun_datar();

echo $cetak->segitiga(12,15);
echo $cetak->lingkaran(7);
echo $cetak->persegi(10);
echo $cetak->persegi_panjang(10,20);

