<?php
if(isset($_POST['save'])){

    $jurusan = $_POST['jurusan'];        
    $namacalon = $_POST['namacalon'];   
    $jk = $_POST['jk']; 
    $tmptlahir = $_POST['tmptlahir'];      
    $tgllahir = $_POST['tgllahir'];       
    $nocalon = $_POST['nocalon'];        
    $email = $_POST['email'];          
    $provinsi = $_POST['provinsi'];       
    $kokab = $_POST['kokab'];          
    $kec = $_POST['kec'];        
    $delur = $_POST['delur'];          
    $alamatcalon = $_POST['alamatcalon'];        
    $kodepos = $_POST['kodepos'];        
    $namaasalsek = $_POST['namaasalsek'];     
    $alamatasalsek = $_POST['alamatasalsek'];          
    $ortu = $_POST['ortu'];       
    $namalengkaportu = $_POST['namalengkaportu'];        
    $pekerjaanortu = $_POST['pekerjaanortu'];          
    $noortu = $_POST['noortu'];         
    $alamatortu = $_POST['alamatortu'];         


}
class ppdb{

  public function data_diri($jurusan2,$nama,$jk2,$tmpt,$tgl,$no,$email2){

    echo "Jurusan : ".$jurusan2."<br>";
    echo "Nama Lengkap : ".$nama. "<br>";
    echo "Jenis Kelamin : ".$jk2. "<br>";
    echo "Tempat Lahir : ".$tmpt. "<br>";
    echo "Tanggal Lahir : ".$tgl. "<br>";
    echo "Nomor HP : ".$no. "<br>";
    echo "Email : ".$email2. "<br>";


  }

  public function alamat($prov,$kab,$kecamatan,$desa,$alamat,$kode){

    echo "Provinsi : ".$prov. "<br>";
    echo "Kab / Kota : ".$kab. "<br>";
    echo "Kecamatan : ".$kecamatan. "<br>";
    echo "Desa / Kelurahan : ".$desa. "<br>";
    echo "Alamat : ".$alamat. "<br>";
    echo "Kode Pos : ".$kode. "<br>";
  }

  public function asal_sekolah($asalsek,$alamatasal){

    echo "Nama Asal Sekolah : ".$asalsek. "<br>";
    echo "Alamat Asal Sekolah : ".$alamatasal."<br>";
  }
  
  public function data_ortu($nama,$pekerjaan,$nohp,$alamatot){

    echo "Nama Lengkap Ayah / Ibu / Wali : ".$nama. "<br>";
    echo "Pekerjaan Ayah / Ibu / Wali : ".$pekerjaan."<br>";
    echo "Nomor HP Orang Tua : ".$nohp. "<br>";
    echo "Alamat Lengkap : ".$alamatot. "<br>";
  }

}
$cetak = new ppdb();


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <center>
  <div class="card" style="width: 25rem";>
  <div class="card-header">
    Data Pendaftar
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col">
      <h5 class="card-title text-primary">Data Diri</h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="text-primary">
          <tr>
            <td><?php echo $cetak->data_diri($jurusan,$namacalon,$jk,$tmptlahir,$tgllahir,$nocalon,$email); ?></td>
          </tr>
</table>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <h5 class="card-title text-primary">Alamat Pendaftar</h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="text-primary">
          <tr>
            <td><?php echo $cetak->alamat($provinsi,$kokab,$kec,$delur,$alamatcalon,$kodepos); ?></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <h5 class="card-title text-primary">Asal Sekolah Pendaftar</h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="text-primary">
          <tr>
            <td><?php echo $cetak->asal_sekolah($namaasalsek,$alamatasalsek); ?></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <h5 class="card-title text-primary">Data Orang Tua</h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="text-primary">
          <tr>
            <td><?php echo $cetak->data_ortu($ortu,$namalengkaportu,$pekerjaanortu,$noortu,$alamatortu);?></td>
          </tr>
        </table>
      </div>
    </div>
</div>
</center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
