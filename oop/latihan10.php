<?php

echo "<center><b>Penggajihan Karyawan</b></center><br>";

class penggajihan{

    public $gaji;
    public $tunjangan;


    public function gaji_pokok($nama,$jabatan){

        echo "<b>Gaji Pokok</b><br>";
        echo "<br>";
        echo "Nama Karyawan : $nama<br>";
        echo "Jabatan : $jabatan<br>";
        if($jabatan == "Direktur"){
            $this->gaji = 10000000;
        } elseif($jabatan == "Manager"){
            $this->gaji = 7500000;
        } elseif ($jabatan == "Karyawan") {
            $this->gaji = 5000000;
        } elseif($jabatan == "OB"){
            $this->gaji = 2500000;
        } else {
            $this->gaji = 0;
        }
        
        echo "Gaji Pokok : $this->gaji<hr>";
    }

    public function tunjangan($pendidikan){

        echo "<b>Tunjangan</b><br>";
        echo "<br>";
        if($pendidikan == "S1"){
            $this->tunjangan = 1000000;
       } elseif($pendidikan == "SMA"){
           $this->tunjangan = 750000;
       } elseif($pendidikan == "SMP"){
           $this->tunjangan = 500000;
       } elseif($pendidikan == "SD"){
           $this->tunjangan = 250000;
       } else {
           $this->tunjangan = 0;
       }
        echo "Pendidikan : $pendidikan<br>";
        echo "Tunjangan Pendidikan : $this->tunjangan<hr>";
        
    }

    public function potongan($tabungan,$pinjaman){

        echo "<b>Potongan</b><br>";
        echo "<br>";
        echo "Tabungan : $tabungan<br>";
        echo "Pinjaman : $pinjaman<br>";
        $totalptg = $tabungan + $pinjaman;
        echo "Total Potongan : $totalptg<hr>";
        echo "<b>Total Gaji Bersih</b><br>";
        echo "<br>";
        $totalgaji = $this->gaji - $totalptg + $this->tunjangan;
        echo "Total Gaji Bersih : $totalgaji";
    }

}

$cetak = new penggajihan();
echo $cetak->gaji_pokok("Regita","Manager");
echo $cetak->tunjangan("S1");
echo $cetak->potongan(1000000,20000);