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
            <li class="breadcrumb-item">Kegiatan</li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </nav>
</div>

<div class="container">
    <!-- <h1>DETAIL PROGRAM KERJA</h1> -->
    <div class="row">
        <div class="col">
            <div class="card mt-5 mb-2">
                <div class="card-body">
                    <img src="public/img/mahasiswa.png" alt="#">
                </div>
            </div>
            <div class="card my-4">
                <h6 class="mt-2 mx-2">Beri Penilaian</h6>
                <div class="row mb-3 text-center">
                    <div class="col"><i class="bi bi-star"></i></div>
                    <div class="col"><i class="bi bi-star"></i></div>
                    <div class="col"><i class="bi bi-star"></i></div>
                    <div class="col"><i class="bi bi-star"></i></div>
                    <div class="col"><i class="bi bi-star"></i></div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label mx-2">Komentar</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
                </textarea>
            </div>
            <div class="float-end mt-1 ">
                <button type="button" class="btn btn-primary btn-sm">Post comment</button>
            </div>
        </div>
        <div class="col">
            <div class="card mt-5 mb-2 mx-3">
                <p class="font-weight-bold mx-3 my-3">Pagelaran akhir tahun Fakultas Teknik dan Kejuruan</p>
                <div class="row gx-1 text-left mx-3 my-3">
                    <div class="col "><i class="bi bi-people-fill">500</i></div>
                    <div class="col"><i class="bi bi-star-half"> 4.8</i></div>
                    <div class="col"><i class="bi bi-chat-dots">500</i></div>
                </div>
            </div>
            <div class="card mt-5 mb-2 mx-3">
                <!-- card label -->
                <h5 class="my-3 px-2">Detail</h5>
                <p class="mx-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione soluta animi quia ad dolor reprehenderit. Totam rerum dolorem exercitationem illum. Culpa, molestias. Quas voluptates voluptatum laborum a eum. Eligendi quae ex corrupti facilis laboriosam autem adipisci in inventore odit voluptatibus officiis optio atque iure possimus, earum nobis sunt dolor ipsum blanditiis corporis doloribus delectus. Iste labore autem numquam quia distinctio tempora voluptatem consectetur optio odit, quibusdam iure, rem ea illo sequi ad ut veritatis enim a dolores porro fugiat. Accusamus libero ab consequuntur unde optio, numquam nostrum asperiores iure? Quae magnam eveniet voluptatibus laborum quasi. Sapiente minus aperiam voluptatum hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, sequi assumenda soluta quam iste praesentium velit laudantium. Quod eveniet dolores aut doloribus. Asperiores, dignissimos harum!</p>
            </div>

        </div>
    </div>
</div>