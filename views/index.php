<div class="pagetitle">
    <!-- <h1>Selamat Datang, <?= $_SESSION["user_role"] ?></h1> -->

    <h1>Selamat Datang, <?= $redis->get('user_name') == null ? 'Guest' : $redis->get('user_name') ?></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->