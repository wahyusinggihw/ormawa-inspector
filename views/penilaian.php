<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Penilaian</li>
        </ol>
    </nav>
</div>
<div class="row">
<<<<<<< HEAD:views/home.php
    <div class="col">
        <div class="card mb-4 mt-4">
            <div class="card-body text-center">
                <h5 class="my-3">BEM FTK</h5>
                <img src="public/img/bem.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <p class="text-justify mb-4 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas hic tenetur delectus quibusdam soluta nulla quae reprehenderit repudiandae atque placeat.</p>
                <div class="d-flex justify-content-center mb-2">
                    <a href="<?php BASEURL ?> ?page=inspect" class="btn btn-outline-primary ms-1 rounded-pill">Inspect <i class="bi bi-star-half"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 mt-4">
            <div class="card-body text-center">
                <h5 class="my-3">HMJ TEKNIK INFORMATIKA</h5>
                <img src="public/img/LOGO HMJ.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <p class="text-justify mb-4 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas hic tenetur delectus quibusdam soluta nulla quae reprehenderit repudiandae atque placeat.</p>
                <div class="d-flex justify-content-center mb-2">
                    <a href="<?php BASEURL ?> ?page=inspect" class="btn btn-outline-primary ms-1 rounded-pill">Inspect <i class="bi bi-star-half"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 mt-4">
            <div class="card-body text-center">
                <h5 class="my-3">HMJ TEKNOLOGI INDUSTRI</h5>
                <img src="public/img/LOGO UNDIKSHA.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <p class="text-justify mb-4 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas hic tenetur delectus quibusdam soluta nulla quae reprehenderit repudiandae atque placeat.</p>
                <div class="d-flex justify-content-center mb-2">
                    <a href="<?php BASEURL ?> ?page=inspect" class="btn btn-outline-primary ms-1 rounded-pill">Inspect <i class="bi bi-star-half"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 mt-4">
            <div class="card-body text-center">
                <h5 class="my-3">POKJA PENALARAN FTK</h5>
                <img src="public/img/logo pokja.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <p class="text-justify mb-4 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas hic tenetur delectus quibusdam soluta nulla quae reprehenderit repudiandae atque placeat.</p>
                <div class="d-flex justify-content-center mb-2">
                    <a href="<?php BASEURL ?> ?page=inspect" class="btn btn-outline-primary ms-1 rounded-pill">Inspect <i class="bi bi-star-half"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
=======
    <?php
    require_once 'db/ormawa.php';
    $ormawa = new Ormawa();
    $ormawaCollections = $ormawa->getAll();
    ?>

    <?php foreach ($ormawaCollections as $item) : ?>
        <?php
        // $sebelum = $item['kegiatan']['0']['nama'];
        // $namaKegiatan = json_encode($sebelum);
        ?>
        <div class="col">
            <div class="card mb-4 mt-4">
                <div class="card-body text-center">
                    <h5 class="my-3"><?= $item->namaOrmawa ?></h5>
                    <img src="public/img/profile.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <p class="text-justify mb-4 mt-3"><?= $item->ketua ?></p>
                    <!-- form that get id of item -->
                    <div class="d-flex justify-content-center mb-2">
                        <a class="btn btn-outline-primary ms-1 rounded-pill" href="<?php BASEURL ?> ?page=inspect&id=<?= $item->_id ?>">Inspect</i></a>
                        <!-- <button type="submit" name="submit" class="btn btn-outline-primary ms-1 rounded-pill">Inspect <i class="bi bi-star-half"></i></button> -->
                    </div>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
>>>>>>> 7ae54c5 (sebelum ganti struktur db):views/penilaian.php
</div>