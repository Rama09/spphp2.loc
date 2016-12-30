<?php
require __DIR__ . '/autoload.php';

$controller = new \App\Controllers\News();

$action = isset($_GET['action']) ? $_GET['action'] : 'Index';

$controller->action($action);