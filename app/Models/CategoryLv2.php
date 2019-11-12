<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryLv2 extends Model
{
    protected $table = 'catagories_lv2';
    public function groupProducts(){
        return $this->hasMany(GroupProduct::class);
    }
}
