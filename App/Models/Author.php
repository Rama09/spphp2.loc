<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 30.12.16
 * Time: 9:51
 */

namespace App\Models;

use App\Model;

class Author extends Model
{
    const TABLE = 'authors';

    public $name;

}