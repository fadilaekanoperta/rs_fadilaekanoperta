<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>

<h1>Edit Data Perawat</h1>
<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" action="<?= base_url('perawat/edit_save') ?>">
<input type="hidden" name="id_perawat" id="id_perawat" value="<?= $id_perawat ?>" />
<input type="hidden" name="id_poliklinik" id="id_poliklinik" value="<?= $id_poliklinik ?>" />
<div>
    <label>Nama Perawat</label>
    <input type="text" name="nama" id="nama" value="<?= $nama ?>" required />
</div>
<div>
    <label>Alamat</label>
    <input type="text" name="alamat" id="alamat" value="<?= $alamat ?>" required />
</div>
<div>
    <label>Tanggal Lahir</label>
    <input type="text" name="tgl_lahir" id="tgl_lahir" value="<?= $tgl_lahir ?>" required />
</div>
<div>
    <input class="btn btn-primary" type="submit" name="submit" 
    id="submit" value="Simpan"/>
</div>
</form>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>