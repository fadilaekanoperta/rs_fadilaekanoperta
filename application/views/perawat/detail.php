<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Divisi</h1>
<table class="table table-bordered">
    <tr>
        <th>Nama Perawat</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
    </tr>
    <tr>
        <td><?= $nama ?></td>
        <td><?= $alamat ?></td>
        <td><?= $tgl_lahir ?></td>
    </tr>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>