<?php
class ppdb{

    public function data_diri($jurusan,$nama,$jk,$tmpt,$tgl,$nohp,$email){

        echo "<b>Data Diri Calon Pendaftar</b><br>";
        echo "Jurusan : $jurusan<br>";
        echo "Nama Lengkap : $nama<br>";
        echo "Jenis Kelamin : $jk<br>";
        echo "Tempat Lahir : $tmpt<br>";
        echo "Tanggal Lahir : $tgl<br>";
        echo "No HP Siswa Yang Bisa Di Hubungi : $nohp<br>";
        echo "Email : $email<hr>";

    }

    public function pendaftar($provinsi,$kota,$kec,$desa,$alamat,$kode){
        
        echo "<b>Alamat Calon Pendaftar</b><br>";
        echo "Provinsi : $provinsi<br>";
        echo "Kab/Kota : $kota<br>";
        echo "Kecamatan : $kec<br>";
        echo "Desa/Kelurahan : $desa<br>";
        echo "Alamat : $alamat<br>";
        echo "Kode Pos : $kode<hr>";

    }

    public function asalskl($asalsklh,$alamatskl){
        
        echo "<b>Data Asal Sekolah</b><br>";
        echo "Asal Sekolah : $asalsklh<br>";
        echo "Alamat Sekolah : $alamatskl<hr>";

    }

    public function dataortu($namalngkp,$pekerjaan,$no,$alamatlngkp){
        
        echo "<b>Data Orang Tua</b><br>";
        echo "Nama Lengkap Ayah / Ibu / Wali : $namalngkp<br>";
        echo "Pekerjaan Ayah / Ibu / Wali  : $pekerjaan<br>";
        echo "Nomor HP yang bisa dihubungi  : $no<br>";
        echo "Alamat lengkap : $alamatlngkp<hr>";

    }

    }

    //object
    $cetak = new ppdb();

    echo $cetak->data_diri("RPL","Hana","Peremapuan","Jakarta","27 Mei 2008","085870472458","hana@gmail.com");
    echo $cetak->pendaftar("Jawa Barat","Bandung","Baleendah","Rancamanyar","Rancamas",40235);
    echo $cetak->asalskl("SMPN 3 Baleendah","Rancamanyar");
    echo $cetak->dataortu("Beyonce","Singer","081234567890","Bandung");





?>