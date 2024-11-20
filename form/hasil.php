<?php
if(isset($_POST['proses'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl = $_POST['tgl'];
    $jabatan = $_POST['jabatan'];
    $lamakerja = $_POST['lama'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];

    if($lamakerja >= 5) {
      $tunjangan = 1000000;
    } else {
      $tunjangan = 0;
    }
    if($status == "Tetap") {
       $bonus = 500000;
    } else {
      $bonus = 0;
    }
    
    if($jabatan == "Kepala Sekolah") {
      $gaji = 10000000;  
      }elseif($jabatan == "Wakasek") {
      $gaji = 7500000;
      }elseif($jabatan == "Guru") {
      $gaji = 5000000;  
      }elseif($jabatan == "OB") {
       $gaji = 2500000;
      } else {
        $gaji = 0;
      }
        $gajikotor = $gaji + $tunjangan + $bonus;

        $totalptg = $bpjs + $pinjaman + $tabungan + $lainnya;
        
        $gajibersih = $gajikotor - $totalptg;
    
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
  <center>
        <div class="container">
          <div class="row">
            <div class="col">
              <h4>Struk Gaji</h4>
            </div>
          </div>
          <div class="row">
            <div class="col">
            <div class="card" style="width: 25rem;">
  <div class="card-header">
    <?php echo $nama;?>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col">
        <h5 class="card-title text-primary">Primary Card Title</h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="text-primary">
        <tr>
            <td>No</td>
            <td>: <?php echo $no; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>: <?php echo $unit; ?></td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td>: <?php echo $tgl; ?></td>
        </tr>
        </table>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <h5 class="card-title text-primary">Gaji</h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="text-primary">
        <tr>
            <td>Jabatan</td>
            <td>: <?php echo $jabatan ; ?></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>: <?php echo $gaji;?></td>
        </tr>
        <tr>
            <td>Lama Kerja</td>
            <td>: <?php echo $lamakerja; ?></td>
        </tr>
        <tr>
            <td>Tunjangan Lama Kerja</td>
            <td>:<?php echo $tunjangan;?></td>
        </tr>
        <tr>
          <td>Status Kerja</td>
          <td>: <?php echo $status;?></td>
        </tr>
        <tr>
          <td>Bonus</td>
          <td>: <?php echo $bonus; ?></td>
        </tr>
        <tr>
          <td><b>Gaji Kotor</b></td>
          <td><b>: <?php echo $gajikotor;?></b></td>
        </tr>
        </table>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <h5 class="card-title text-primary">Potongan</h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="text-primary">
        <tr>
            <td>BPJS</td>
            <td>: <?php echo $bpjs; ?></td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>: <?php echo $pinjaman; ?></td>
        </tr>
        <tr>
            <td>Tabungan</td>
            <td>: <?php echo $tabungan; ?></td>
        </tr>
        <tr>
            <td>Lainnya</td>
            <td>: <?php echo $lainnya; ?></td>
        </tr>
        <tr>
          <td><b>Total Potongan</b></td>
          <td><b>: <?php echo $totalptg;?></b></td>
        </tr>
        </table>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <h5 class="card-title text-primary">Total</h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="text-primary">
        <tr>
            <td><b>Gaji Bersih</b></td>
            <td><b>: <?php echo $gajibersih;?></b></td>
        </tr>
          </div>
        </div>
  </div>
</div>
            </div>
            
      </center>

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
} else {
  ?>
  <?php
}