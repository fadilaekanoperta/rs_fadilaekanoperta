<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>

<h1>Edit Data Pasien</h1>
<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" action="<?= base_url('pasien/edit_save') ?>">
<input type="hidden" name="no_rm" id="no_rm" value="<?= $no_rm ?>" />
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama Pasien</label>
    <div class="col-sm-5"><input class="form-control" type="text" name="nama" id="nama" value="<?= $nama ?>" required /></div>
</div><br>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-5"><input class="form-control" type="text" name="alamat" id="alamat" value="<?= $alamat ?>" required /></div>
</div><br>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
    <div class="col-sm-5"><input class="form-control" type="text" name="ttl" id="ttl" value="<?= $ttl ?>" required /></div>
</div><br>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-5"><input type="radio" name="jenis_kelamin" 
    id="jenis_kelamin" value="Laki-Laki" <?= $jenis_kelamin == 'Laki-Laki' ? 'checked' : '' ?> />Laki - Laki
    <input type="radio" name="jenis_kelamin" 
    id="jenis_kelamin" value="Perempuan" <?= $jenis_kelamin == 'Perempuan' ? 'checked' : '' ?>/>Perempuan</div>
</div><br>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Pekerjaan</label>
    <div class="col-sm-5"><input class="form-control" type="text" name="pekerjaan" id="pekerjaan" value="<?= $pekerjaan ?>" required /></div>
</div><br>
<div class="mb-3 row">
    <input class="btn btn-primary" type="submit" name="submit" 
    id="submit" value="Simpan"/>
</div>
</form>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>