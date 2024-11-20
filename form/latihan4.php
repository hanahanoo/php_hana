<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Nilai Ujian Nasional</h2>
        <form action="" method="POST">
            <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value=""></td>
            </tr>
            <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <select name="jurusan">
                    <option value="RPL">RPL</option>
                    <option value="TKRO">TKRO</option>
                    <option value="TBSM">TBSM</option>
                </select>
            </td>
        </tr>
        <tr>
        <td><h4>Nilai Ujian</h4></td>
        </tr>
        <tr>
                <td>Nilai B.Indonesia</td>
                <td>:</td>
                <td><input type="number" name="indo" value=""></td>
            </tr>
            <tr>
                <td>Nilai B.Inggris</td>
                <td>:</td>
                <td><input type="number" name="inggris" value=""></td>
            </tr>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td><input type="number" name="mtk" value=""></td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td><input type="number" name="produktif" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="Simpan"></td>
            </tr>
            </table>
        </form>
<?php

if(isset($_POST['proses'])) {

    $nama1 = $_POST['nama'];
    $kelas1 = $_POST['kelas'];
    $jurusan1 = $_POST['jurusan'];
    $nilai = $_POST['indo'];
    $nilai1 = $_POST['inggris'];
    $nilai2 = $_POST['mtk'];
    $nilai3 = $_POST['produktif'];
    $rata = ($nilai + $nilai1 + $nilai2 + $nilai3) / 4;
    if($rata > 75) {
        $status = "Tuntas";
    } else {
        $status = "Belum Tuntas";
    }
    ?>

    <table>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $nama1; ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>: <?php echo $kelas1; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: <?php echo $jurusan1; ?></td>
        </tr>
        <tr>
            <td>Nilai B.Indonesia</td>
            <td>: <?php echo $nilai; ?></td>
        </tr>
        <tr>
            <td>Nilai B.Inggris</td>
            <td>: <?php echo $nilai1; ?></td>
        </tr>
        <tr>
            <td>Nilai Matematika</td>
            <td>: <?php echo $nilai2; ?></td>
        </tr>
        <tr>
            <td>Nilai Produktif</td>
            <td>: <?php echo $nilai3; ?></td>
        </tr>
        <tr>
            <td>Rata-rata</td>
            <td>: <?php echo $rata; ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>: <?php echo $status; ?></td>
        </tr>

    </table>






<?php
}?>
    </center>
</body>
</html>
