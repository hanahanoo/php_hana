<?php
class contoh{

    public $nama = "Hana";

    public function perkenalan(){
        echo "Assalamualaikum";

    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
echo "<br>";
echo $cetak->nama;

?>