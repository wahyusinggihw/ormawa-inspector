<?php
require_once 'db/users.php';

$users = new Users();

// var_dump($_SESSION['user']);

if (isset($_SESSION['user']) == null) {
    if (isset($_POST['login'])) {
        $post_email = $_POST['email'];
        $post_password = $_POST['password'];
        $data = $users->findOneUser([
            'email' => $post_email,
            'password' => $post_password
        ]);
        foreach ($data as $user) {
            if ($user->email == $post_email && $user->password == $user->password) {
                $_SESSION["user"] = "admin";
                // var_dump($_SESSION["user"]);
                echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=kegiatan' . "';</script>");
            } else {
                // javascript alert
                // echo "<script>alert('Email atau Password Salah')</script>";
            }
        }
    }
}
?>
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
    </nav>
</div>

<div class="card shadow py-3 mx-auto" style="width: 20rem;">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Login In Admin</h6>
    </div>
    <div class="container col-sm">
        <form method="POST" name="login" action="">
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
            <button type="login" name="login" class="btn btn-primary">Login</button>
            <a type="login align-end" name="register" class="btn btn-secondary" href="<?php BASEURL ?> ?page=register">Register</a>
        </form>
    </div>
</div>