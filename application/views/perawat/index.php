<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Data Perawat</h1>
<div><a class="btn btn-primary" href="<?= base_url("perawat/tambah")?>">Tambah</a></div><br>
<table class="table table-bordered">
    <tr>
        <th>Nama Perawat</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['nama_perawat'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['tgl_lahir'] ?></td>
            <td>
                <a class="btn btn-success btn-sm" href="<?= base_url("perawat/detail/{$data['id_perawat']}")?>">Detail</a>
                <a class="btn btn-warning btn-sm" href="<?= base_url("perawat/edit/{$data['id_perawat']}")?>">Edit</a>
                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("perawat/hapus/{$data['id_perawat']}")?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>