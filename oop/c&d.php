<?php

class Kucing {

    
    public function __construct(){
        echo "Hallo Saya kucing<br>";
    }

    public function __destruct(){
        echo "Miaw";
    }

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
