<?php

namespace App;

class Db extends Singleton
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=spphp2.loc', 'root', '1234');
    }

    public function execute($sql, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        return $res;
    }

    public function query($sql, $params, $class)
    {
        // Подготовка запроса
        $sth = $this->dbh->prepare($sql);
        // Выполнение подготовленного запроса
        $res = $sth->execute($params);
        if (false !== $res) {
            // Задаем режим возвращаемых данных
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}