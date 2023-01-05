<?php
session_start();

isset($_SESSION['user_role']) ? $_SESSION['user_role'] : $_SESSION['user_role'] = "guest";

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
// if (!session_id()) {
// }

// require_once 'init.php';

include('config.php');
include('views/layouts/app.php');
