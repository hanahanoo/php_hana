<?php
if(isset($_POST['proses'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $nilai1  =$_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];
    $nilai4 = $_POST['nilai4'];
    $nilai5  =$_POST['nilai5'];
    $nilai6 = $_POST['nilai6'];
    $nilai7 = $_POST['nilai7'];
    $nilai8 = $_POST['nilai8'];
    $nilai9  =$_POST['nilai9'];
    $nilai10 = $_POST['nilai10'];
    $nilai11 = $_POST['nilai11'];
    $nilai12 = $_POST['nilai12'];
    $nilai13  =$_POST['nilai13'];
    $nilai14 = $_POST['nilai14'];
    $nilai15 = $_POST['nilai15'];
    $nilai16 = $_POST['nilai16'];

   

    class rapot{

        public $rata2;

        public function nilai_rapot($harian,$tugas,$uts,$uas){
            $this->rata2 = ($harian + $tugas + $uts + $uas) / 4;
            echo $this->rata2;
            if($this->rata2 >= 75){
                echo "</td><td align=center>Tuntas";
            } else {
                echo "</td><td align=center>Tidak Tuntas";
            }
        }
    }
    $cetak = new rapot();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama;?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo $kelas;?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?php echo $jurusan;?></td>
        </tr>
    </table>
    <table align="center" border="1" cellspacing="0" cellpading="0" width="40%"> <br>
        <tr>
            <td><center>Mapel</center></td>
            <td><center>Harian</center></td>
            <td><center>Tugas</center></td>
            <td><center>UTS</center></td>
            <td><center>UAS</center></td>
            <td><center>Rata-Rata</center></td>
            <td><center>Grade</center></td>
        </tr>
        
        <tr>
            <td><center>Matematika</center></td>
            <td><center><?php echo $nilai1; ?></center></td>
            <td><center><?php echo $nilai2 ;?></center></td>
            <td><center><?php echo $nilai3; ?></center></td>
            <td><center><?php echo $nilai4 ;?></center></td>
            <td><center><?php echo $cetak->nilai_rapot($nilai1,$nilai2,$nilai3,$nilai4);?></center></td>

        </tr>

        <tr>
            <td><center>Indonesia</center></td>
            <td><center><?php echo $nilai5; ?></center></td>
            <td><center><?php echo $nilai6 ;?></center></td>
            <td><center><?php echo $nilai7; ?></center></td>
            <td><center><?php echo $nilai8 ;?></center></td>
            <td><center><?php echo $cetak->nilai_rapot($nilai5,$nilai6,$nilai7,$nilai8);?></center></td>
           
        </tr>

        <tr>
            <td><center>Inggris</center></td>
            <td><center><?php echo $nilai9; ?></center></td>
            <td><center><?php echo $nilai10 ;?></center></td>
            <td><center><?php echo $nilai11; ?></center></td>
            <td><center><?php echo $nilai12 ;?></center></td>
            <td><center><?php echo $cetak->nilai_rapot($nilai9,$nilai10,$nilai11,$nilai12);?></center></td>
        </tr>

        <tr>
            <td><center>Produktif</center></td>
            <td><center><?php echo $nilai13; ?></center></td>
            <td><center><?php echo $nilai14 ;?></center></td>
            <td><center><?php echo $nilai15; ?></center></td>
            <td><center><?php echo $nilai16 ;?></center></td>
            <td><center><?php echo $cetak->nilai_rapot($nilai13,$nilai14,$nilai15,$nilai16);?></center></td>
        </tr>

    </table>
</body>
</html>