<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        if (\request()->category) {
            if (\request()->category === 'others') {
                $products = Product::doesntHave('categories')->get();
                $categoryName = 'Other';
            } else {
                $products = Product::with('categories')->whereHas('categories', function ($query) {
                    $query->where('slug', \request()->category);
                })->get();
                $categoryName = $categories->where('slug', \request()->category)->first()->name;
            }
        } else {
            $products = Product::inRandomOrder()->get();
            $categoryName = 'Feature';
        }


        if (\request()->sort === 'low_high') {
            $products = $products->sortBy('price');
        } elseif (\request()->sort === 'high_low') {
            $products = $products->sortByDesc('price');
        }

        return view('shop.shop', compact('products', 'categories', 'categoryName'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mayLikes = Product::where('slug', '!=', $slug)->inRandomOrder()->take(3)->get();

        return view('shop.product-details')->with(['product' => $product, 'mayLikes' => $mayLikes]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
