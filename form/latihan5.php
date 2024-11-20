<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="yayasan.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>PENGGAJIHAN<br>GURU/KARYAWAN YAYASAN ASSALAAM</h3>
                </div>
            </div>
            <form action="hasil.php" method="POST">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 24rem;">
                            <div class="card-header" align="left">
                                Data Penggajihan
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col" align="left">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">No</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" name="no">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Unit Pendidikan</label>
                                            <select class="form-select" aria-label="Default select example" name="unit">
                                                <option selected disabled>Pilih Unit Pendidikan</option>
                                                <option value="TK">TK</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="MTS">MTS</option>
                                                <option value="MA">MA</option>
                                                <option value="SMA">SMA</option>
                                                <option value="SMK">SMK</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Tanggal Gaji</label>
                                            <input type="date" class="form-control" name="tgl" id="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h3><i>Gaji</i></h3>
                                        <div class="mb-3" align="left">
                                            <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                                            <select class="form-select" aria-label="Default select example" name="jabatan">
                                                <option selected disabled>Pilih Jabatan</option>
                                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                <option value="Wakasek">Wakasek</option>
                                                <option value="Guru">Guru</option>
                                                <option value="OB">OB</option>
                                            </select>
                                        </div>
                                        <div class="mb-3" align="left">
                                            <label for="exampleInputPassword1" class="form-label">Lama Kerja (Tahun)</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lama Kerja" name="lama">
                                        </div>
                                        <div class="mb-3" align="left">
                                            <label for="exampleInputPassword1" class="form-label">Status Kerja</label>
                                            <select class="form-select" aria-label="Default select example" name="status">
                                                <option selected disabled>Pilih Status Kerja</option>
                                                <option value="Tetap">Tetap</option>
                                                <option value="Kontrak">Kontrak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3><i>Potongan</i></h3>
                                        <div class="mb-3" align="left">
                                            <label for="exampleInputPassword1" class="form-label">BPJS</label>
                                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="" name="bpjs">
                                        </div>
                                        <div class="mb-3" align="left">
                                            <label for="exampleInputPassword1" class="form-label">Pinjaman</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Pinjaman" name="pinjaman">
                                        </div>
                                        <div class="mb-3" align="left">
                                            <label for="exampleInputPassword1" class="form-label">Tabungan</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tabungan" name="tabungan">
                                        </div>
                                        <div class="mb-3" align="left">
                                            <label for="exampleInputPassword1" class="form-label">Lainnya</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lainnya" name="lainnya">
                                        </div>
                                        
                                        </div>
                                        </div>
                                 </div>
                                <div class="row">
                                            <div class="col">
                                            <button type="submit" class="btn btn-primary" name="proses">Proses</button>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </center>
</body>
</html>
