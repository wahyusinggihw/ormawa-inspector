<?php
if ($_SESSION['user'] != "admin") {
    echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=index' . "';</script>");
    exit;
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