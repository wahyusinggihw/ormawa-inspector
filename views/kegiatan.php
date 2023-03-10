<?php
if ($_SESSION['user_role'] == "mahasiswa" || $_SESSION['user_role'] == "guest") {
    echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=index' . "';</script>");
    exit;
}
?>

<?php
require_once 'db/kegiatan.php';
require_once 'db/rate.php';

$kegiatans = new Kegiatan();
$rate = new Rate();
$role = $_SESSION['user_role'];

if (isset($_GET['action']) == 'delete') {
    // var_dump($_GET['id']);
    $id = $_GET['id'];
    $status = $kegiatans->drop($id);
    $status2 = $rate->drop($id);
    // var_dump($status->getDeletedCount());
    if ($status->getDeletedCount() || $status2->getDeletedCount()) {
        echo ("<script>alert('Data berhasil di hapus');</script>");
        echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=kegiatan' . "';</script>");
    }
}
?>

<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Kegiatan</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="card shadow py-4">
        <div class="col col-sm-2 mb-2">
            <?php
            echo (($role != "admin") ? ' <a href="?page=addKegiatan" class="btn btn-primary ms-1 ">Tambah kegiatan</i></a>'  : '');
            ?>

        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kegiatan</th>
                    <?php
                    echo (($role == "admin") ? '<th scope="col">Ormawa</th>'  : '');
                    ?>
                    <th scope="col">Pelaksanaan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($role == "admin") {
                    $cursor = $kegiatans->getAll();
                } else {
                    $cursor = $kegiatans->getById($role);
                }
                $i = 0;
                ?>
                <?php foreach ($cursor as $item) : $i++ ?>
                    <?php
                    $oid = $item->_id;
                    $idOrmawa = $item->idOrmawa;
                    $nama = $item['details']['nama'];
                    $pelaksanaan = $item['details']['pelaksanaan'];
                    $status = $item['details']['status'];
                    ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $nama ?></td>
                        <?php
                        echo (($role == "admin") ? '<td>' . $idOrmawa . '</td>' : '');
                        ?>
                        <td><?= $pelaksanaan ?></td>
                        <td><button type="button" class="btn <?php echo ($status == 'selesai' ? 'btn-success' : 'btn-warning')  ?> btn-sm"><?= $status ?></button></td>
                        <td>
                            <a href="?page=editKegiatan&id=<?= $oid ?>" class="btn btn-outline-warning ms-1 "><i class="bi bi-pencil"></i></a>
                            <a href="?page=kegiatan&id=<?= $oid ?>&action=delete" class="btn btn-outline-danger ms-1 "><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>