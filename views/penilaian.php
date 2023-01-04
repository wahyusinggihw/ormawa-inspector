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
    require_once 'db/ormawa.php';
    $ormawa = new Ormawa();
    $ormawaCollections = $ormawa->getAll();
    ?>

    <?php foreach ($ormawaCollections as $item) : ?>

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
</div>