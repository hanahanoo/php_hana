<?php

class bangun_datar{

    public $hasil1;
    public $hasil2;
    public $hasil3;
    public $hasil4;

}

    class luas extends bangun_datar{
        public function segitiga($alas,$tinggi){
            echo "<b>Luas Segitiga</b><br>";
            echo "Alas : $alas<br>";
            echo "Tinggi : $tinggi<br>";
            echo "Rumus : 1/2 (Alas x Tinggi)<br>";
            $this->hasil1 = $alas * $tinggi / 2;
            echo "Hasilnya : $this->hasil1<hr>";
        
        }
        
        public function lingkaran($r){
            echo "<b>Luas Lingkaran</b><br>";
            $pi = 3.14;
            echo "Phi : $pi<br>";
            echo "Jari-Jari : $r<br>";
            echo "Rumus : Phi x r x r<br>";
            $this->hasil2 = $pi * $r * $r;
            echo "Hasilnya : $this->hasil2<hr>";
        }
    
        public function persegi($sisi){
            echo "<b>Luas Persegi</b><br>";
            echo "Sisi : $sisi<br>";
            echo "Rumus : Sisi x Sisi<br>";
            $this->hasil3 = $sisi * $sisi;
            echo "Hasilnya : $this->hasil3<hr>";
        
        }
    
        public function persegi_panjang($panjang,$lebar){
            echo "<b>Luas Persegi Panjang</b><br>";
            echo "Panjang : $panjang<br>";
            echo "Lebar : $lebar<br>";
            echo "Rumus : Panjang x Lebar<br>";
            $this->hasil4 = $panjang * $lebar;
            echo "Hasilnya : $this->hasil4<hr>";
        }
    }

    class keliling extends bangun_datar{
        public function segitiga($sisi1,$sisi2,$sisi3){
            echo "<b>Keliling Segitiga</b><br>";
            echo "sisi 1 : $sisi1<br>";
            echo "sisi 2 : $sisi2<br>";
            echo "sisi 3 : $sisi3<br>";
            echo "Rumus : sisi + sisi + sisi<br>";
            $this->hasil1 = $sisi1 + $sisi2 + $sisi3;
            echo "Hasilnya : $this->hasil1<hr>";
        
        }
        
        public function lingkaran($d){
            echo "<b>Keliling Lingkaran</b><br>";
            $pi = 3.14;
            echo "Phi : $pi<br>";
            echo "Diameter : $d<br>";
            echo "Rumus : 3,14 x Diameter<br>";
            $this->hasil2 = $pi * $d;
            echo "Hasilnya : $this->hasil2<hr>";
        }
    
        public function persegi($sisi){
            echo "<b>Keliling Persegi</b><br>";
            echo "Sisi : $sisi<br>";
            echo "Rumus : 4 x Sisi<br>";
            $this->hasil3 = 4 * $sisi;
            echo "Hasilnya : $this->hasil3<hr>";
        
        }
    
        public function persegi_panjang($panjang,$lebar){
            echo "<b>Keliling Persegi Panjang</b><br>";
            echo "Panjang : $panjang<br>";
            echo "Lebar : $lebar<br>";
            echo "Rumus : 2 x panjang + lebar<br>";
            $this->hasil4 = 2 * $panjang + $lebar;
            echo "Hasilnya : $this->hasil4<hr>";
        }
    }

    $cetak = new luas();
   

    echo $cetak->segitiga(10,15);
    echo $cetak->persegi(10);
    echo $cetak->persegi_panjang(10,20);
    echo $cetak->lingkaran(7);

    $cetak2 = new keliling();
    echo $cetak2->segitiga(10,15,20);
    echo $cetak2->lingkaran(20);
    echo $cetak2->persegi(10);
    echo $cetak2->persegi_panjang(10,15);


