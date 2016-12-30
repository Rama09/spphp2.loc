<?php

namespace App\Models;

use App\Model;
use App\traits\Overload;

/**
 * Class News
 * @package App\Models
 *
 * @property \App\Models\Author $author
 */
class News extends Model
{
    use Overload;
    const TABLE = 'news';

    public $author_id;
    public $name;
    public $description;
    public $text;

    public function __get($name)
    {
        switch ($name) {
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($name)
    {
        switch ($name) {
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return false;
        }
    }

}