<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <img src="smk.png" alt="" width=30%>
            <h2>Form Biodata Diri</h2>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value=""></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" value=""></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" value=""></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
            <input type="radio" name="jk" value="Perempuan">Perempuan
            <input type="radio" name="jk" value="Laki-laki">Laki-laki
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id="" col=5></textarea></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>
                <select name="pendidikan">
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td>
                <select name="status">
                    <option>Belum Menikah</option>
                    <option>Sudah Menikah</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
        <td>
            <input type="checkbox" name="hobi1" value="Membaca">Membaca
            <input type="checkbox" name="hobi1" value="Menulis">Menulis
            <input type="checkbox" name="hobi1" value="Ngepush">Ngepush
        </td>
        </tr>
        <tr>
            <td>Cita-cita</td>
            <td>:</td>
            <td>
                <select name="cita2">
                    <option>Programmer</option>
                    <option>Dokter</option>
                    <option>Psikiater</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kata-kata Bijak</td>
            <td>:</td>
            <td><textarea name="kata2" id="" col=5></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="Save"></td>
        </tr>
    </table>
        </form>
    </center>
</body>
</html>

<?php

if(isset($_POST['proses'])) {

    $nama2 = $_POST['nama'];
    $tempat_lahir2 = $_POST['tempat_lahir'];
    $tanggal_lahir2 = $_POST['tanggal_lahir'];
    $jeniskelamin = $_POST['jk'];
    $alamat2 = $_POST['alamat'];
    $agama2 = $_POST['agama'];
    $pendidikan2 = $_POST['pendidikan'];
    $status2 = $_POST['status'];
    $hobi4 = $_POST['hobi1'];
    $cita = $_POST['cita2'];
    $kata = $_POST['kata2'];
      
    echo "<center>";
    echo "Nama : $nama2";
    echo "<br>";
    echo "Tempat Lahir : $tempat_lahir2";
    echo "<br>";
    echo "Tanggal Lahir : $tanggal_lahir2";
    echo "<br>";
    echo "Jenis Kelamin : $jeniskelamin";
    echo "<br>";
    echo "Alamat : $alamat2";
    echo "<br>";
    echo "Agama : $agama2";
    echo "<br>";
    echo "Pendidikan Terakhir : $pendidikan2";
    echo "<br>";
    echo "Status : $status2";
    echo "<br>";
    echo "Hobi : $hobi4";
    echo "<br>";
    echo "Cita-cita : $cita";
    echo "<br>";
    echo "Kata-kata Bijak : $kata";
    echo "</center>";

    
}