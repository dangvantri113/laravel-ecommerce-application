<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public function groupProduct()
    {
        return $this->belongsTo(GroupProduct::class,'group_product_id');
    }
    public function color(){
        return $this->belongsTo(Color::class);
    }

}
