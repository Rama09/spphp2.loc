<?php

namespace App;

abstract class Model
{
    const TABLE = '';

    public $id;

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
        $db = Db::instance();
        $data = $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id=' . $id . ' LIMIT 1',
            static::class
        );
        if (!empty($data))
            return current($data);
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

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }

        $sql = 'INSERT INTO ' . static::TABLE . ' ('. implode(',', $columns) .') VALUES('. implode(',', array_keys($values)) .')';

        $db = Db::instance();
        $db->execute($sql, $values);

    }

    public function update()
    {
        if ($this->isNew()) {
            return;
        }

        $values = [];
        $setString = '';
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $values[':'.$k] = $v;
            $setString .= ', ' . $k . '=:' . $k;
        }
        $setString = ltrim($setString, ', ');

        $sql = 'UPDATE ' . static::TABLE . ' SET ' . $setString . ' WHERE id=' . $this->id;

        $db = Db::instance();
        $db->execute($sql, $values);
    }

    public function delete()
    {
        if ($this->isNew()) {
            return;
        }

        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=' . $this->id . ' LIMIT 1';

        $db = Db::instance();
        $db->execute($sql);
    }

    public function save()
    {
        if ($this->isNew())
            $this->insert();
        else
            $this->update();
    }
}