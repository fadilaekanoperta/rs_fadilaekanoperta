<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>

<h1>Tambah Data Perawat</h1>
<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" action="<?= base_url('perawat/tambah_save') ?>">
<div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Perawat</label>
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
    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
    </div>
</div><br>
<div>
    <input class="btn btn-primary" type="submit" name="submit" 
    id="submit" value="Simpan"/>
</div>
</form>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>