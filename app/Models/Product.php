<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $appends = ['presetPrice'];
    use HasFactory;

    public function getPresetPriceAttribute()
    {
        return '$' . $this->price / 100;
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_product');
    }
}

//App\Models\Product::with('categories')
