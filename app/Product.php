<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function variant()
    {
        return $this->hasMany(Variant::class);
    }
}
