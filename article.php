<?php

require __DIR__ . '/autoload.php';

$article = \App\Models\News::findById($_GET['id']);

include_once __DIR__ . "/App/Views/news/view.php";