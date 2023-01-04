<?php
if ($_SESSION['user_role'] == "guest") {
    echo ("<script>alert('Login dahulu untuk melakukan penilaian');</script>");
    echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=login' . "';</script>");
    exit;
}

require_once 'db/kegiatan.php';
$kegiatans = new Kegiatan();
$id = $_GET['id'];
$role = $_SESSION['user_role'];
$kegiatanCollection = $kegiatans->getById($id);
$getByStatus = $kegiatans->getByStatus('selesai');
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
            <?php foreach ($kegiatanCollection as $item) : $i++  ?>

                <?php
                $oid = $item->_id;
                $nama = $item['details']['nama'];
                $pelaksanaan = $item['details']['pelaksanaan'];
                $status = $item['details']['status'];
                ?>

                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $nama ?></td>
                    <td><?= $pelaksanaan ?></td>
                    <td><button type="button" class="btn <?php echo ($status == 'selesai' ? 'btn-success' : 'btn-warning')  ?> btn-sm"><?= $status ?></button></td>
                    <td><a href="<?php BASEURL ?> ?page=detailKegiatan&id=<?= $id ?>&idKegiatan=<?= $oid ?>" class="btn btn-outline-primary ms-1 <?php echo ($status == 'pending' ? 'disabled' : '')  ?> "><i class="bi bi-star-half"></i></a></td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
</div>
</div>