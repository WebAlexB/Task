<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function user()
    {
        return $this->belongsToMany(\App\Recipe::class);
    }
}
