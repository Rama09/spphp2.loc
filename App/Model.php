<?php

namespace App;

abstract class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findById($id)
    {
        $db = new Db();
        $data = $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id=' . $id . ' LIMIT 1',
            static::class
        );
        if (!empty($data))
            return $data;
        else
            return false;
    }

    public static function findLast($amount, $sortable_field)
    {
        $db = new Db();
        $data = $db->query(
            'SELECT * FROM ' . static::TABLE . ' ORDER BY ' . $sortable_field . ' DESC LIMIT ' . $amount,
            static::class
        );
        if (!empty($data))
            return $data;
        else
            return false;
    }
}