<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class,'category_product');
    }
}
//App\Models\Category::all();
//$cat=App\Models\Category::with('products')
//$pro=App\Models\Product::with('categories')
