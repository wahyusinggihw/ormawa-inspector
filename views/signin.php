<?php
// login
require_once 'db/users.php';
$users = new Users();


// var_dump($data);
$email = $_POST['email'];
// $password = $_POST['password'];
// $data = $users->findOneUser([
//     'email' => $email,
//     'password' => $password
// ]);

// foreach ($data as $user) {
//     var_dump($user);
// }
// var_dump(isset($_POST['signin']));
// if () {
// }

if (isset($_POST['signin'])) {
} else {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = $users->findOneUser([
        'email' => $email,
        'password' => $password
    ]);
    if ($data) {
        // $_SESSION['signin'] = true;
        // header('Location: ' . BASEURL . '?page=home');
    } else {
        // $_SESSION['signin'] = false;
        // header('Location: ' . BASEURL . '?page=signin');
    }
}

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
        <form method="POST" name="signin" action="">
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