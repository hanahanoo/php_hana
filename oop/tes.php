<?php

class manusia{
    //property
    var $nama;
    var $warna;
    
    //method manusia
    function tampilkan_nama(){
        return "Nama saya malasngoding <br/>";
    }
    
    function warna_kulit(){
        return "Warna kulit saya hitam <br/>";
    }
    
}

//object
$manusia = new manusia();
echo $manusia->tampilkan_nama();
echo $manusia->warna_kulit();