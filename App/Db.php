<?php

/**
 * Created by PhpStorm.
 * User: roman
 * Date: 17.11.16
 * Time: 9:57
 */

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=spphp2.loc', 'root', '1234');
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();

        return $res;
    }
}