<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Divisi</h1>
<table class="table table-bordered">
    <tr>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>Tempat, Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Pekerjaan</th>
    </tr>
    <tr>
        <td><?= $nama ?></td>
        <td><?= $alamat ?></td>
        <td><?= $ttl ?></td>
        <td><?= $jenis_kelamin ?></td>
        <td><?= $pekerjaan ?></td>
    </tr>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>