<?php
session_start();

isset($_SESSION['user_role']) ? $_SESSION['user_role'] : $_SESSION['user_role'] = "guest";

// if (!session_id()) {
// }

// require_once 'init.php';

include('config.php');
include('views/layouts/app.php');
