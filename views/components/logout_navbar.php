<?php
require_once 'db/users.php';
if (isset($_POST['logout'])) {
    $redis->del('user_name');
    session_destroy();
    echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=index' . "';</script>");
    exit;
}
?>
<!-- INI LOGIN -->
<li class="nav-item d-block d-lg-none">
    <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
    </a>
</li>
<li class="nav-item">
    <form action="" method="POST" name="logout">
        <button type="logout" name="logout" class="btn nav-link nav-icon bi bi-box-arrow-in-right">
            <!-- <i class="bi bi-box-arrow-in-right"></i> -->
        </button>
    </form>
</li>