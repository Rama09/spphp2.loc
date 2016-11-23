<?php

require __DIR__ . '/autoload.php';

$news = new \App\Models\News;
$news->description = 'о111писание';
$news->name = '111Новый заголовок';
$news->save();

