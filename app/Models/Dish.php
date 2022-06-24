<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    public function category(){
        return $this->BelongsTo(Category::class);
    }
    public function ingredient(){
        return $this->belongsToMany(Ingredient::class);
    }
    public function dish_order(){
        return $this->hasMany(Dish_Order::class);
    }
}
