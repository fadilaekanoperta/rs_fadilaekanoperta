<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Data Pasien</h1>
<div><a class="btn btn-primary" href="<?= base_url("pasien/tambah")?>">Tambah</a></div><br>
<table class="table table-bordered">
    <tr>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>Tempat, Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Pekerjaan</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['ttl'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['pekerjaan'] ?></td>
            <td>
                <a class="btn btn-success btn-sm" href="<?= base_url("pasien/detail/{$data['no_rm']}")?>">Detail</a>
                <a class="btn btn-warning btn-sm" href="<?= base_url("pasien/edit/{$data['no_rm']}")?>">Edit</a>
                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("pasien/hapus/{$data['no_rm']}")?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>