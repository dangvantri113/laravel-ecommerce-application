<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupProduct extends Model
{
    protected $table = 'groups_product';
    public function products()
    {
        return $this->hasMany(Product::class,'group_product_id');
    }
    public function categoryLv1(){
        return $this->belongsTo(CategoryLv1::class);
    }
    public function categoryLv2(){
        return $this->belongsTo(CategoryLv2::class);
    }
    public function shop(){
        return $this->belongsTo(Shop::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
