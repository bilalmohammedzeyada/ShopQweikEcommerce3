<?php

namespace App\Models;

use System\Model;

class SearchModel extends Model
{
    public function getPosts($title)
    {
        return $this->select('*')
				 ->from('posts')
				 ->where("title LIKE '%$title%'")
				 ->fetchAll();
    }
}