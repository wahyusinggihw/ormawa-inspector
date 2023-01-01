<?php
require_once 'db/services.php';
require_once 'db/kegiatan.php';

if ($_SESSION['role'] == "guest") {
    echo ("<script>alert('Login dahulu untuk melakukan penilaian');</script>");
    echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=login' . "';</script>");
    exit;
}

$kegiatans = new Kegiatan();
$roleCatcher = new Services();
$id = $_GET['idKegiatan'];
$role = $roleCatcher->roleCatcher();
$kegiatanCollection = $kegiatans->getKegiatan($id);
foreach ($kegiatanCollection as $item) {
    $nama = $item['details']['nama'];
    $deskripsi = $item['details']['deskripsi'];
}

// $cekKomen = $kegiatans->komentarChecker($id);

// var_dump($cekKomen);
// die;

$currentUserName = $_SESSION['user_name'];

if (isset($_POST['submit'])) {
    // var_dump($_POST['komentarKegiatan']);
    if (isset($_POST['komentarKegiatan'])) {
        $komentar = $_POST['komentarKegiatan'];
        if ($_POST['komentarKegiatan'] == "") {
            echo ("<script>alert('Komentar tidak boleh kosong');</script>");
        } else {
            $status = $kegiatans->insertKomentar(
                $id,
                [
                    'komentars.' . $currentUserName => [
                        'nama' => $currentUserName,
                        'teks' => $komentar,
                    ],
                    // 'rate' => $rate,
                ]
            );
            if ($status->getModifiedCount()) {
                echo ("<script>alert('Komentar berhasil dikirim');</script>");
                // echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=kegiatan' . "';</script>");
            }
        }
        // var_dump($rate);
        // echo ("sumbit");
    }
}

$i = 0;
?>

<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Penilaian</li>
            <li class="breadcrumb-item">Kegiatan</li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </nav>
</div>

<div class="container">
    <!-- <h1>DETAIL PROGRAM KERJA</h1> -->
    <div class="row">
        <div class="col">
            <div class="card mt-5 mb-4">
                <div class="card-body">
                    <img src="public/img/mahasiswa.png" alt="#">
                </div>
            </div>
            <form action="" method="post" name="submit" class="mb-4">
                <div class="form-label">Beri Penilaian</div>
                <div class="mb-4">
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="komentarKegiatan">Beri komentar</label>
                    <textarea class="form-control" id="komentarKegiatan" name="komentarKegiatan" rows="3"></textarea>
                </div>
                <div class="float-end mt-1">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Post comment</button>
                </div>
            </form>
        </div>

        <div class="col">
            <div class="card mt-5 mb-2 mx-3">
                <p class="font-weight-bold mx-3 my-3"><?= $nama ?></p>
                <div class="row gx-1 text-left mx-3 my-3">
                    <div class="col "><i class="bi bi-people-fill">500</i></div>
                    <div class="col"><i class="bi bi-star-half"> 4.8</i></div>
                    <div class="col"><i class="bi bi-chat-dots"></i></div>
                </div>
            </div>
            <div class="card mt-5 mb-2 mx-3">
                <!-- card label -->
                <h5 class="my-3 px-2">Detail</h5>
                <p class="mx-2 text-justify"><?= $deskripsi ?></p>
            </div>

            <div class="col mt-5 mb-2 mx-3">
                <div class="card mt-5 mb-2">
                    <h5 class="my-3 px-2">Komentar</h5>
                    <?php if ($item['komentars'] == null) :  ?>
                        <p class='mx-2 text-justify'>Belum ada komentar</p>
                    <?php else : ?>
                        <?php foreach ($item['komentars'] as $komen[0]) : ?>
                            <?php foreach ($komen[0] as $item) : ?>
                                <div class="row gx-1 text-left mx-3 ">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $item->nama ?></h5>
                                                <p class="card-text"><?= $item->teks ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    <?php endif ?>


                    <!-- <div class="row gx-1 text-left mx-3 mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        var rating_data = 0;

        $('#add_review').click(function() {

            $('#review_modal').modal('show');

        });

        $(document).on('mouseenter', '.submit_star', function() {

            var rating = $(this).data('rating');

            reset_background();

            for (var count = 1; count <= rating; count++) {

                $('#submit_star_' + count).addClass('text-warning');

            }

        });

        function reset_background() {
            for (var count = 1; count <= 5; count++) {

                $('#submit_star_' + count).addClass('star-light');

                $('#submit_star_' + count).removeClass('text-warning');

            }
        }

        $(document).on('mouseleave', '.submit_star', function() {

            reset_background();

            for (var count = 1; count <= rating_data; count++) {

                $('#submit_star_' + count).removeClass('star-light');

                $('#submit_star_' + count).addClass('text-warning');
            }

        });
        $(document).on('click', '.submit_star', function() {

            rating_data = $(this).data('rating');
            // console.log(rating_data);

            $.ajax({
                method: "POST",
                data: {
                    'rating': rating_data
                }
            });
        });

    });
</script>