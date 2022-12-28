<?php
if (!session_id()) {
    session_start();
    isset($_SESSION['user']) ?  $_SESSION['user'] = 'admin' : $_SESSION['user'] = null;
}

// require_once 'init.php';

include('config.php');
include('views/layouts/app.php');
