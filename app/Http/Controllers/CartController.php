<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CalculateBills;
use App\Http\Controllers\Traits\PriceFormatter;
use App\Models\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    use PriceFormatter, CalculateBills;

    public function index()
    {
        $mayLikes = Product::inRandomOrder()->take(4)->get();
        return view('shop.cart')->with(['mayLikes' => $mayLikes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric|min:0.1',
            'name' => 'required',
        ]);

        \Cart::instance('default')->add(
            $request->id,
            $request->name,
            $request->quantity,
            $request->price,
            [],
            5
        )->associate('App\Models\Product');


        return response()->json(['message' => 'successfully added to cart', 'cart' => \Cart::instance('default')->content()], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|numeric'
        ]);

        \Cart::instance('default')->update($id, $request->quantity);

        return response()->json(['bills' => $this->getBills()]);
    }

    public function empty()
    {
        \Cart::instance('default')->destroy();
        $bills = $this->getBills();
        return response()->json(['bills' => $bills]);
    }

    public function remove($id)
    {
        \Cart::instance('default')->remove($id);

        return response()->json(['message' => 'successfully removed from cart']);
    }

    public function getCartData()
    {
        $bills = $this->getBills();
        $cart = \Cart::instance('default')->content();
        $saved = \Cart::instance('save')->content();
        return response()->json(['bills' => $bills, 'cart' => $cart, 'saved' => $saved]);
    }

//    public function getCartItems()
//    {
//        $cart = \Cart::instance('default')->content();
//        return response()->json(['cart' => $cart]);
//    }
}
