<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
                $products = Product::with(['categories','ratings'])->whereHas('categories', function ($query) {
                    $query->where('slug', \request()->category);
                });
                $categoryName = optional($categories->where('slug', \request()->category)->first())->name;
            }
        } else {
            $products = Product::with(['ratings'])->where('featured', true)->inRandomOrder();
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
            'q' => 'required',
        ]);

        $products = Product::search($request->q)->paginate(10);
        return view('shop.search_results')->with(['products' => $products, 'query' => $request->q]);
    }

    public function vueSearch(Request $request)
    {

        $products = Product::search($request->search)->paginate(10);

        return response()->json($products);
    }

    public function algoliaSearch(Request $request)
    {

        // $products = Product::search($request->search)->paginate(10);

        // return response()->json($products);
    }



    public function setRating($product_id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'rate' => 'required|numeric',
        ]);

        if ($validator->failed()) {
            return response()->json($validator->errors(), 400);
        }
        auth()->user()->ratings()->updateOrCreate([
            'product_id' => $product_id],
            ['rating' => $request->rating],
        );
        try {
            $product = Product::with('ratings')->findOrFail($product_id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'product not found'], 404);
        }

        return response()->json(['avgRating' => $product->ratings->avg('rating')]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with('ratings')->firstOrFail();
        $product->mainImgUrl = $this->productImageUrl($product->image);
        $product->avgRating = $product->ratings->avg('rating');

        $product->userRating = auth()->user() ? optional($product->ratings->where('user_id', auth()->user()->id)->first())->rating : '';
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

    public function productImageUrl($path)
    {
        return $path && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('images/product-default.jpg');
    }

}
