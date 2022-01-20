<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Tambah Data Pasien</h1>

<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" action="<?= base_url('pasien/tambah_save') ?>">

<div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Pasien</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
</div><br>

<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="alamat" name="alamat" required>
    </div>
</div><br>

<div class="mb-3 row">
    <label for="ttl" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="ttl" name="ttl" required>
    </div>
</div><br>

<div class="mb-3 row">
    <label  class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-5">
    <input type="radio" name="jenis_kelamin" 
    id="jenis_kelamin" value="Laki-Laki" checked />Laki - Laki
    <input type="radio" name="jenis_kelamin" 
    id="jenis_kelamin" value="Perempuan"/>Perempuan
</div>
</div><br>

<div class="mb-3 row">
    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
    </div>
</div><br>

<div>
    <input class="btn btn-primary" type="submit" name="submit" 
    id="submit" value="Simpan"/>
</div>

</form>