<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findLast(3, 'id');

include_once "App/Views/news/news.php";

