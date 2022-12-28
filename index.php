<?php
if (!session_id()) {
    session_start();
    $_SESSION['signin'] = false;
}

// require_once 'init.php';

include('config.php');
include('views/layouts/app.php');
