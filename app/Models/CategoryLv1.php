<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryLv1 extends Model
{
    protected $table = 'categories_lv1';
    public function categoriesLv2()
    {
        return $this->hasMany(CategoryLv2::class,'categories_lv1_id');
    }
    public function groupProducts(){
        return $this->hasMany(GroupProduct::class);
    }


}
