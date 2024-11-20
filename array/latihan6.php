<?php

$novel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi Baiq",
        "tanggal" => "20 November 2024",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Samuel",
        "penulis" => "Ita kurniawati",
        "tanggal" => "1 Oktober 2021",
        "penerbit" => "AKAD"
    ],
    [
        "judul" => "Bulan",
        "penulis" => "Tere Liye",
        "tanggal" => "13 Mei 2020",
        "penerbit" => "Republika"
    ],
    [
        "judul" => "Bumi",
        "penulis" => "Tere Liye",
        "tanggal" => "20 November 2020",
        "penerbit" => "Republika"
    ],
    [
        "judul" => "Hujan",
        "penulis" => "Tere Liye",
        "tanggal" => "2 januari 2021",
        "penerbit" => "Republika"
    ]
];

foreach($novel as $buku) {
    echo "Judul : ".$buku["judul"]."<br>";
    echo "Penulis : ".$buku["penulis"]."<br>";
    echo "Tanggal Rilis : ".$buku["tanggal"]."<br>";
    echo "Penerbit : ".$buku["penerbit"]."<hr>";
}