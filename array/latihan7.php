<?php
$orang = [
    [ 
        "nama" => "Hana",
        "buah" => [
            [
                "buahfav" => "Anggur",
                "jenis" => ["jenis1" => "Anggur Ijo",
                           "jenis2" => "Anggur Merah"] 
            ]
        ]
    ],          
    [ 
        "nama" => "Nabilla",
        "buah" => [
            [
                "buahfav" => "Alpukat",
                "jenis" => ["jenis1" => "Alpukat Mentega",
                           "jenis2" =>  "Alpukat Biasa"]
            ],
            [
                "buahfav" => "Apel",
                "jenis" => ["jenis1" => "Apel Merah",
                           "jenis2" => "Apel Hijau"]
            ]
            ]
    ]
            
];

            foreach ($orang as $fav) {
                echo "Nama Pemilik : ".$fav["nama"]. "<br>";
                echo "Daftar Buah Kesukaan : <br>";
                echo "<ul>";
                foreach($fav["buah"] as $data){
                    echo "<li>" . $data['buahfav'] . "</li>";
                    foreach($data["jenis"] as $anak){
                        echo "<ol>-$anak</ol>";
                }
                }
            echo "</ul>";
            }