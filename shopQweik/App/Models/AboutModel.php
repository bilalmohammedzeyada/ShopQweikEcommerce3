<?php

namespace App\Models;

use System\Model;

class AboutModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'settings';

    /**
    * Get All Posts
    *
    * @return array
    */
    public function all()
    {
          return $this->select('p.*')
                    ->from('settings p')
                    ->fetchAll();
    }
}