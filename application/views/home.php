<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<center><h3>Berikut adalah Data Rekam Medis pada Sistem Manajemen Informasi Rumah Sakit</h3></center><br>
<table class="table">
    <tr>
        <th>NO RM</th>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>TTL</th>
        <th>ID Perawat</th>
        <th>ID Poliklinik</th>
        <th>Diagnosa</th>
        <th>No Ruangan</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['no_rm'] ?></td>
            <td><?= $data['nama_pasien'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['ttl'] ?></td>
            <td><?= $data['id_perawat'] ?></td>
            <td><?= $data['id_poliklinik'] ?></td>
            <td><?= $data['diagnosa'] ?></td>
            <td><?= $data['no_ruang'] ?></td>
            <td>
                <a class="btn btn-success btn-sm" href="<?= base_url("home/detail/{$data['no_rm']}")?>">Detail</a>
                <a class="btn btn-warning btn-sm" href="<?= base_url("home/edit/{$data['no_rm']}")?>">Edit</a>
                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("home/hapus/{$data['no_rm']}")?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>