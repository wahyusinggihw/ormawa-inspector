<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Penilaian</li>
        </ol>
    </nav>
</div>
<div class="row">
    <?php
    require_once 'db/kegiatan.php';
    $kegiatan = new Kegiatan();
    $kegiatanCollection = $kegiatan->getAll();
    ?>

    <?php foreach ($kegiatanCollection as $item) : ?>
        <?php
        $sebelum = $item['kegiatan']['0']['nama'];
        $nama = json_encode($sebelum);

        ?>
        <div class="col">
            <div class="card mb-4 mt-4">
                <div class="card-body text-center">
                    <h5 class="my-3"><?= $item->nama ?></h5>
                    <img src="public/img/profile.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <p class="text-justify mb-4 mt-3"><?= $nama ?></p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="<?php BASEURL ?> ?page=inspect" class="btn btn-outline-primary ms-1 rounded-pill">Inspect <i class="bi bi-star-half"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


</div>
</div>