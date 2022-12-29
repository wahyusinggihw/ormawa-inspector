<?php
if ($_SESSION['role'] == "guest") {
    echo ("<script>alert('Login dahulu untuk melakukan penilaian');</script>");
    echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=login' . "';</script>");
    exit;
}

require_once 'db/services.php';
require_once 'db/kegiatan.php';
$kegiatans = new Kegiatan();
$roleCatcher = new Services();
$id = $_GET['id'];
$role = $roleCatcher->roleCatcher();
$kegiatanCollection = $kegiatans->getById($id);
$i = 0;
?>

<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Penilaian</li>
            <li class="breadcrumb-item active">Kegiatan</li>
        </ol>
    </nav>
</div>

<div class="row">
</div>
<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-black">Daftar Kegiatan</h6>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Pelaksanaan</th>
                <th scope="col">Status</th>
                <th scope="col">Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kegiatanCollection as $item) :  ?>
                <?php foreach ($item['kegiatan'] as $kegiatan) : $i++; ?>
                    <?php
                    $oid = $kegiatan->_id;

                    // $sebelum = $item['kegiatan']['0']['nama'];
                    // $namaKegiatan = json_encode($sebelum);
                    ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $kegiatan->nama ?></td>
                        <td><?= $kegiatan->pelaksanaan ?></td>
                        <td><button type="button" class="btn btn-warning btn-sm disabled"><?= $kegiatan->status ?></button></td>
                        <td><a href="<?php BASEURL ?> ?page=detailKegiatan&id=<?= $id ?>&idKegiatan=<?= $oid ?>" class="btn btn-outline-primary ms-1 "><i class="bi bi-star-half"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
            <!-- <tr>
                    <th scope="row">2</th>
                    <td>Pagelaran Akhir Tahun fakultas 2022</td>
                    <td>17-12-2022</td>
                    <td><button type="button" class="btn btn-secondary btn-sm">waitting</button></td>
                    <td><button type="button" class="btn btn-primary "><i class="bi bi-star-half">

                            </i></button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Pagelaran Akhir Tahun fakultas 2022</td>
                    <td>17-12-2022</td>
                    <td><button type="button" class="btn btn-success btn-sm">terlaksana</button></td>
                    <td><button type="button" class="btn btn-primary "><i class="bi bi-star-half">

                            </i></button></td>
                </tr> -->


        </tbody>
    </table>
</div>
</div>