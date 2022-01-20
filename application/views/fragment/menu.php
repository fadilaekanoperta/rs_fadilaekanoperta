<?php
//mendapatkan uri segment (divisi,karyawan,users) utk css active pada menu
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$folder = $uri_segments[2];
if(count($uri_segments) > 3){
    $folder = $uri_segments[3];
}
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> -->

        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
            <ul class="nav navbar-nav">
                <li <?= $folder == 'home' ? 'class="active"' : '' ?>><a class="navbar-brand" href="<?= base_url() ?>home">Home</a></li>
                <li <?= $folder == 'perawat' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>perawat">Perawat</a></li>
                <li <?= $folder == 'tindakan' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>tindakan">Tindakan</a></li>
                <li <?= $folder == 'pasien' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>pasien">Pasien</a></li>
            </ul>
        <!-- </div> -->
    </div>
</nav>