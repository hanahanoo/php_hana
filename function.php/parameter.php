<?php

function biodata($nama,$tempat_lahir,$tgl_lhr,$jk,$agama,$alamat,$hobi){

    echo "Nama : $nama<br>";
    echo "Tempat Lahir : $tempat_lahir<br>";
    echo "Tanggal lahir : $tgl_lhr<br>";
    echo "Jenis Kelamin : $jk<br>";
    echo "Agama : $agama<br>";
    echo "Alamat : $alamat<br>";
    echo "Hobi : $hobi";

}

function menghitung($angka1,$angka2){

    echo "Bilangan ke 1 : $angka1<br>";
    echo "Bilangan ke 2 : $angka2<br>";
    $hasil = $angka1 + $angka2;
    echo "Hasilnya : $hasil";
}
menghitung(10,40);

//biodata("hana","jakarta","27 mei 2008","perempuan","islam","bandung","masak");

?>