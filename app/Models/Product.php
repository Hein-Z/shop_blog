<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use TCG\Voyager\Traits\Resizable;

class Product extends Model
{
    protected $fillable = ['quantity'];
    protected $appends = ['presetPrice'];
    use HasFactory;
    use Resizable;
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'products.name' => 10,
            'products.details' => 9,
            'products.price' => 5,
            'products.description' => 2,
        ],
    ];

    public function getPresetPriceAttribute()
    {
        return '$' . number_format($this->price, 2);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}

//App\Models\Product::with('categories')
