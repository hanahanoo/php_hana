<?php

$siswa = [
    [
        "nama" => "Hana",
        "jk" => "Perempuan",
        "kelas" => "XI RPL 1"
    ],
    [
        "nama" => "Nabilla",
        "jk" => "Perempuan",
        "kelas" => "XI RPL 2"
    ],
];

foreach($siswa as $murid) {
    echo "Nama :" .$murid["nama"]."<br>";
    echo "Jenis Kelamin :".$murid["jk"]."<br>";
    echo "Kelas :".$murid["kelas"]."<br>";
    echo "<hr>";
}