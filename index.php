<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 17.11.16
 * Time: 9:35
 */

require __DIR__ . '/autoload.php';

$db = new \App\Db();
$data = $db->query('SELECT * FROM foo');
var_dump($data);