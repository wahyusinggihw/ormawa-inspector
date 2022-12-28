<?php
// login
require_once 'db/dosen.php';
$dosens = new DosenPembimbing();

// var_dump($_SESSION['user']);

if (isset($_POST['register'])) {
    $dataDosen = $dosens->getAll();
    foreach ($dataDosen as $key => $value) {

        var_dump($value);
    }
    // $post_nama = $_POST['email'];
    // $post_email = $_POST['email'];
    // $post_password = $_POST['password'];
    // $data = $users->findOneUser([
    //     'email' => $post_email,
    // ]);
    // if (empty($data)) {

    // } else {
    //     echo ("<script>alert('Email sudah digunakan');</script>");
    // }
}



?>

<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Register</li>
        </ol>
    </nav>
</div>

<div class="card shadow py-3 mx-auto" style="width: 20rem;">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Register Admin</h6>
    </div>
    <div class="container col-sm">
        <form method="POST" name="register" action="">
            <div class="mb-3 mt-3">
                <label for="exampleInputname1" class="form-label">Nama Lengkap</label>
                <input type="name" name="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3 mt-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="login" name="register" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>