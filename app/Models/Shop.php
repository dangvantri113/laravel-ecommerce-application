<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function groupProducts(){
        $this->hasMany(GroupProduct::class);
    }
}
