<?php
require __DIR__ . '/autoload.php';

$view = new \App\View();

$view->title = 'Тайтл';
$view->news = \App\Models\News::findAll();

$view->display(__DIR__ . '/App/templates/index.php');
