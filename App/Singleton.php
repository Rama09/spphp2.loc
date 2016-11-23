<?php

namespace App;


abstract class Singleton
{

    protected static $instance;
    protected function __construct()
    {

    }

    public static function instance()
    {
        if (null === self::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }
}