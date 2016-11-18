<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=spphp2.loc', 'root', '1234');
    }

    public function execute($sql, array $options = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();

        return $res;
    }

    public function query($sql, $class)
    {
        // Подготовка запроса
        $sth = $this->dbh->prepare($sql);
        // Выполнение подготовленного запроса
        $res = $sth->execute();
        if (false !== $res) {
            // Задаем режим возвращаемых данных
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}