<?php

$dataJSON = '[
    {
        "no" : 101,
        "judul" : "Dilan 1991",
        "genre" : "Romance",
        "penulis" : "Pidi Baiq",
        "penerbit" : "Airlangga",
        "tahun_rilis" : "2014"
    },
    {
        "no" : 102,
        "judul" : "Laskar Pelangi",
        "genre" : "Drama",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "tahun_rilis" : "2005"
    },
    {
        "no" : 103,
        "judul" : "Perahu Kertas",
        "genre" : "Romance",
        "penulis" : "Dee Lestari",
        "penerbit" : "Bentang Pustaka",
        "tahun_rilis" : "2009"
    },
    {
        "no" : 104,
        "judul" : "Cantik Itu Luka",
        "genre" : "Realisme Magis",
        "penulis" : "Eka Kurniawan",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_rilis" : "2002"
    },
    {
        "no" : 105,
        "judul" : "Bumi Manusia",
        "genre" : "Sejarah",
        "penulis" : "Pramoedya Ananta Toer",
        "penerbit" : "Hasta Mitra",
        "tahun_rilis" : "1980"
    },
    {
        "no" : 106,
        "judul" : "1984",
        "genre" : "Fiksi",
        "penulis" : "George Orwell",
        "penerbit" : "Secker & Warburg",
        "tahun_rilis" : "1949"
    },
    {
        "no" : 107,
        "judul" : "To Kill a Mockingbird",
        "genre" : "Drama",
        "penulis" : "Harper Lee",
        "penerbit" : "J. B. Lippincott & Co.",
        "tahun_rilis" : "1960"
    },
    {
        "no" : 108,
        "judul" : "Ayat-Ayat Cinta",
        "genre" : "Romance",
        "penulis" : "Habiburrahman El Shirazy",
        "penerbit" : "Republika",
        "tahun_rilis" : "2004"
    },
    {
        "no" : 109,
        "judul" : "Dilan 1990",
        "genre" : "Romance",
        "penulis" : "Pidi Baiq",
        "penerbit" : "Pastel Books",
        "tahun_rilis" : "2014"
    },
    {
        "no" : 110,
        "judul" : "Hujan",
        "genre" : "Fiksi",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_rilis" : "2016"
    },
    {
        "no" : 111,
        "judul" : "Amba",
        "genre" : "Fiksi",
        "penulis" : "Laksmi Pamuntjak",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_rilis" : "2012"
    },
    {
        "no" : 112,
        "judul" : "Gadis Kretek",
        "genre" : "Drama",
        "penulis" : "Ratih Kumala",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_rilis" : "2012"
    },
    {
        "no" : 113,
        "judul" : "O",
        "genre" : "Fiksi Satir",
        "penulis" : "Eka kurniawan",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_rilis" : "2016"
    },
    {
        "no" : 114,
        "judul" : "Sirkus Pohon",
        "genre" : "Fiksi",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "tahun_rilis" : "2016"
    },
    {
        "no" : 115,
        "judul" : "Pulang",
        "genre" : "Drama",
        "penulis" : "Leila S. Chudori",
        "penerbit" : "Kepustakaan Populer Gramedia(KPG)",
        "tahun_rilis" : "2012"
    },
    {
        "no" : 116,
        "judul" : "Rindu",
        "genre" : "Drama",
        "penulis" : "Tere Liye",
        "penerbit" : "Republika",
        "tahun_rilis" : "2014"
    },
    {
        "no" : 117,
        "judul" : "Amor Fati",
        "genre" : "Fiksi Sejarah",
        "penulis" : "Remy Sylado",
        "penerbit" : "Nuansa Cendekia",
        "tahun_rilis" : "2007"
    },
    {
        "no" : 118,
        "judul" : "Paris Van Java",
        "genre" : "Romance",
        "penulis" : "Remy Sylado",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_rilis" : "2005"
    },
    {
        "no" : 119,
        "judul" : "Hujan Bulan Juni",
        "genre" : "Romance",
        "penulis" : "Sapardi Djoko Damono",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun_rilis" : "2015"
    },
    {
        "no" : 120,
        "judul" : "Rectoverso",
        "genre" : "Fiksi",
        "penulis" : "Dee Lestari",
        "penerbit" : "Goodfaith",
        "tahun_rilis" : "2008"
    }
    
]';

$list = json_decode($dataJSON);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <table class="table table-bordered mx-auto" style="width : 50%" >
    <tr>
        <center><h4>Kumpulan Novel</h4></center><br>
    </tr>
    <tr>
            <td>No</td>
            <td>Judul</td>
            <td>Genre</td>
            <td>Penulils</td>
            <td>Penerbit</td>
            <td>Tahun Rilis</td>
</tr>  
        <?php foreach($list as $novel) {?>
             
        <tr>

            <td><?php echo "{$novel->no}";?></td>
            <td><?php echo "{$novel->judul}";?></td>
            <td><?php echo "{$novel->genre}";?></td>
            <td><?php echo "{$novel->penulis}";?></td>
            <td><?php echo "{$novel->penerbit}";?></td>
            <td><?php echo "{$novel->tahun_rilis}";?></td>
        </tr>      
      <?php } ?>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php
// foreach($list as $novel) {
//     echo "No : {$novel->no} <br>";
//     echo "Judul : {$novel->judul} <br>";
//     echo "Genre : {$novel->genre} <br>";
//     echo "Penulis : {$novel->penulis} <br>";
//     echo "Penerbit : {$novel->penerbit} <br>";
//     echo "Tahun Rilis : {$novel->tahun_rilis} <br>";
//     echo "<hr>";
// }
