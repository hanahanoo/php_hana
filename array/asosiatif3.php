<?php

$siswa =[[
    "nis" => 1001,
    "nama" => "Haddad",
    "kelas" => "XI RPL 3",
    "ekskul" => [
        "nama_ekskul" => "Tari", "Karawitan", "Futsal"
    ]
    

],
[
    "nis" => 1002,
    "nama" => "Rido",
    "kelas" => "XI RPL ",
    "ekskul" => [
        "nama_ekskul" => "Futsal"
    ]
    

]
] ;

foreach ($siswa as $murid) {
    echo "NIS : ".$murid["nis"]. "<br>";
    echo "Nama : ".$murid["nama"]. "<br>";
    echo "Kelas : ".$murid["kelas"]. "<br>";
    echo "Ekstrakulikuler : <br>";
    echo "<ul>";
    foreach($murid['ekskul'] as $data){
        echo "<li> $data </li>";
    }
    echo "</ul>";
}
   
