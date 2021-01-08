<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Product extends Model
{
    protected $appends = ['presetPrice'];
    use HasFactory;
    use Resizable;

    public function getPresetPriceAttribute()
    {
        return '$' . number_format($this->price , 2);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
}

//App\Models\Product::with('categories')
