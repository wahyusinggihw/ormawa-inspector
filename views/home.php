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
        $namaKegiatan = json_encode($sebelum);
        ?>
        <div class="col">
            <div class="card mb-4 mt-4">
                <div class="card-body text-center">
                    <h5 class="my-3"><?= $item->namaOrmawa ?></h5>
                    <img src="public/img/profile.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <p class="text-justify mb-4 mt-3"><?= $namaKegiatan ?></p>
                    <form action="<?php BASEURL ?> ?page=inspect" method="post" name="namaOrmawa">
                        <div class="d-flex justify-content-center mb-2">
                            <input type="hidden" name="role" value="<?= $item->role ?>">
                            <button type="submit" name="submit" class="btn btn-outline-primary ms-1 rounded-pill">Inspect <i class="bi bi-star-half"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


</div>
</div>