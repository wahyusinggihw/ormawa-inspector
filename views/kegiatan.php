<?php
if ($_SESSION['role'] == "mahasiswa" && $_SESSION['role'] == "guest") {
    echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=index' . "';</script>");
    exit;
}
?>

<?php
require_once 'db/services.php';
require_once 'db/kegiatan.php';
$kegiatans = new Kegiatan();
$roleCatcher = new Services();
$role = $roleCatcher->roleCatcher();

// switch ($role) {
//     case 'admin':
//         echo 'anda admin';
//         break;

//     case 'bem':
//         echo 'anda bem';
//         break;

//     case 'pokja':
//         echo 'anda pokja';
//         break;

//     case 'hmjti':
//         echo 'anda hmjti';
//         break;

//     case 'hmjtekin':
//         echo 'anda hmjtekin';
//         break;
//     case 'mahasiswa':
//         echo 'anda mahasiswa';
//         break;
// }
// 
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
            <a href="<?php BASEURL ?> ?page=addKegiatan" class="btn btn-primary ms-1 ">Tambah kegiatan</i></a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Pelaksanaan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2f9ec7 (fix logic dan db)
                if ($role == "admin") {
                    $cursor = $kegiatans->getAll();
                } else {
                    $cursor = $kegiatans->getById($role);
                }
<<<<<<< HEAD
=======

                $cursor = $kegiatans->getByRole($role);
                // var_dump($cursor);
>>>>>>> 7ae54c5 (sebelum ganti struktur db)
=======
>>>>>>> e2f9ec7 (fix logic dan db)
                $i = 0;
                ?>
                <?php foreach ($cursor as $item) : $i++ ?>
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
                        <td><?= $status ?></td>
                        <td><a href="<?= BASEURL ?>?page=detailKegiatan&id=<?= $kegiatan['_id'] ?>" class="btn btn-outline-warning ms-1 "><i class="bi bi-pencil"></i></a><a href="<?= BASEURL ?>?page=detailKegiatan&id=<?= $kegiatan['_id'] ?>" class="btn btn-outline-danger ms-1 "><i class="bi bi-trash3"></i></a></td>
                    </tr>

                <?php endforeach; ?>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Pagelaran Akhir Tahun fakultas 2022</td>
                    <td>17-12-2022</td>
                    <td><button type="button" class="btn btn-warning btn-sm">on going</button></td>
                    <td><a href="<?php BASEURL ?> ?page=detailKegiatan" class="btn btn-outline-primary ms-1 "><i class="bi bi-star-half"></i></a></td>
                </tr>
                <tr>
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