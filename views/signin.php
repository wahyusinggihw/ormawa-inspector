<?php
// login
require_once 'db/users.php';
$users = new Users();
$usersCollection = $users->usersCollections();
$userFinder = $usersCollection->find(array('username' => 'admin'));

var_dump($userFinder);
if (isset($_SESSION['auth'])) {
    echo 'Kamu sudah login';
    // header("location:home.php");
} else {
    // echo 'Kamu belum login';
    if (isset($_POST['signin'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $data = $users->usersCollections();

        if (!$data == $email) {
            echo 'email salah';
            // return header("location:signin.php?pesan=gagal");
        } else if (!$data == $password) {
            echo 'password salah';
            // return header("location:signin.php?pesan=gagal");
        } else {
            echo 'berhasil';
            // $_SESSION['email'] = $email;
            // $_SESSION['status'] = "login";
            // header("location:home.php");
        }
    } else {
        echo 'gagal';
    }
}
// $email = $_POST['email'];
// $password = $_POST['password'];
// var_dump($email);
// var_dump($password);
// var_dump($data = $users->usersCollections()->findOne(['email']));

?>

<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Sign in</li>
        </ol>
    </nav>
</div>

<div class="card shadow py-3 mx-auto" style="width: 20rem;">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Sign In Admin</h6>
    </div>
    <div class="container col-sm">
        <form method="POST">
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>