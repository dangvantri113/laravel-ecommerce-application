<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = ['group_product_id','user_id','number_star'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
