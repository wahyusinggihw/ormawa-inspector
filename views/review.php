<?php
if ($_SESSION['role'] == "mahasiswa" || $_SESSION['role'] == "guest") {
    echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=index' . "';</script>");
    exit;
}
?>

<?php
require_once 'db/services.php';
require_once 'db/kegiatan.php';
require_once 'db/rate.php';


$kegiatans = new Kegiatan();
$roleCatcher = new Services();
$rate = new Rate();
$role = $roleCatcher->roleCatcher();

$id = $_GET['id'];
// $rating = $rate->totalRatingReview($id);

$kegiatanCollection = $kegiatans->getByIdRating($id);

// var_dump($rating);
// die;
$i = 0;
?>

<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Review</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="card shadow py-4">
        <div class="col col-sm-2 mb-2">
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kegiatan</th>
                    <?php
                    echo (($_SESSION['role'] == "admin") ? '<th scope="col">Ormawa</th>'  : '');
                    ?>
                    <th scope="col">Pelaksanaan</th>
                    <th scope="col">totalRating</th>
                    <th scope="col">Komentar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // if ($role == "admin") {
                //     $cursor = $kegiatans->getAll();
                // } else {
                //     $cursor = $kegiatans->getById($role);
                // }
                $i = 0;
                ?>
                <?php foreach ($kegiatanCollection as $item) : $i++ ?>
                    <?php
                    $oid = $item->_id;
                    $idOrmawa = $item->idOrmawa;
                    $nama = $item['details']['nama'];
                    $pelaksanaan = $item['details']['pelaksanaan'];
                    $totalRating = $item['totalRating'];
                    ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $nama ?></td>
                        <?php
                        echo (($_SESSION['role'] == "admin") ? '<td>' . $idOrmawa . '</td>' : '');
                        ?>
                        <td><?= $pelaksanaan ?></td>
                        <td><?= $totalRating ?></td>
                        <td><a href="<?php BASEURL ?> ?page=detailKegiatan&id=<?= $id ?>&idKegiatan=<?= $oid ?>" class="btn btn-outline-primary ms-1"><i class="bi bi-chat-dots"></i></a></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>