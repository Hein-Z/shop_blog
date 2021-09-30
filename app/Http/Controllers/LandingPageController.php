<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feature_products = Product::where('featured', true)->take(8)->inRandomOrder()->get();
        $best_selling_products = Product::query()
            ->join('order_product', 'order_product.product_id', '=', 'products.id')
            ->selectRaw('products.*, SUM(order_product.quantity) AS quantity_sold')
            ->groupBy(['products.id']) // should group by primary key
            ->orderByDesc('quantity_sold')
            ->take(6)->get(); // 10 best-selling products
            $latest_blog_posts= Post::latest()->take(3)->get();
        return view('index', compact('feature_products','best_selling_products','latest_blog_posts'));
    }
}
