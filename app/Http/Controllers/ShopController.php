<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = 9;
        $categories = Category::all();
        if (\request()->category) {
            if (\request()->category === 'uncategorized') {
                $products = Product::doesntHave('categories');
                $categoryName = 'Uncategorized';
            } else {
                $products = Product::with('categories')->whereHas('categories', function ($query) {
                    $query->where('slug', \request()->category);
                });
                $categoryName = optional($categories->where('slug', \request()->category)->first())->name;
            }
        } else {
            $products = Product::where('featured', true)->inRandomOrder();
            $categoryName = 'Feature';
        }


        if (\request()->sort === 'low_high') {
            $products = $products->inRandomOrder()->orderBy('price')->paginate($pagination);
        } elseif (\request()->sort === 'high_low') {
            $products = $products->inRandomOrder()->orderBy('price', 'desc')->paginate($pagination);
        } else {
            $products = $products->inRandomOrder()->paginate($pagination);
        }

        return view('shop.shop', compact('products', 'categories', 'categoryName'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->validate([
            'q' => 'required'
        ]);

        $products = Product::search($request->q)->get();
        return view('shop.search_results')->with(['products' => $products, 'query' => $request->q]);
    }

    public function vueSearch(Request $request)
    {

        $products = Product::search($request['query'])->get();

        return response()->json($products);
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
        $product->mainImgUrl = $this->productImageUrl($product->image);
        $subImgUrls = [];
        $stockThreshold = setting('site.stock_threshold');

        if ($product->images) {
            foreach (json_decode($product->images) as $subImg) {
                array_push($subImgUrls, $this->productImageUrl($subImg));
            }
        }

        array_push($subImgUrls, $product->mainImgUrl);

        $mayLikes = Product::where('slug', '!=', $slug)->inRandomOrder()->take(3)->get();

        return view('shop.product-details')->with(['product' => $product, 'mayLikes' => $mayLikes, 'subImgUrls' => $subImgUrls, 'stockThreshold' => $stockThreshold]);
    }

    function productImageUrl($path)
    {
        return $path && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('images/product-default.jpg');
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
