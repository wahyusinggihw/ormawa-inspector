<?php
$id = $_SESSION['user_role'];

?>
<li class="nav-heading">Admin</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?php BASEURL ?> ?page=kegiatan">
        <i class="bi bi-calendar"></i>
        <span>Kegiatan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php BASEURL ?> ?page=review&id=<?= $id ?>">
        <i class=" bi bi-chat-dots"></i>
        <span>Review</span>
    </a>
</li>