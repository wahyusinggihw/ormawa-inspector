<?php
session_start();

isset($_SESSION['role']) ? $_SESSION['role'] : $_SESSION['role'] = "guest";

// if (!session_id()) {
// }

// require_once 'init.php';

include('config.php');
include('views/layouts/app.php');
