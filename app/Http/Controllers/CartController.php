<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\PriceFormatter;
use App\Models\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    use PriceFormatter;

    public function index()
    {

        $mayLikes = Product::inRandomOrder()->take(4)->get();

        $bills['total'] = $this->priceFormat(\Cart::total(false, '', ''));
        $bills['subtotal'] = $this->priceFormat(\Cart::subtotal(false, '', ''));
        $bills['tax'] = $this->priceFormat(\Cart::tax(false, '', ''));

        return view('shop.cart')->with(['mayLikes' => $mayLikes, 'bills' => $bills]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric|min:0.1',
            'name' => 'required',
//            'extra' => 'required'
        ]);

        \Cart::instance('default')->add(
            $request->id,
            $request->name,
            $request->quantity,
            $request->price,
//            ['extra' => $request->extra],
            [],
            5
        )->associate('App\Models\Product');

        return redirect()->route('shop.cart')->with('success', 'Successfully added to your shopping cast');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
                'quantity'=>'required|numeric'
            ]);

        \Cart::update($id, $request->quantity);
        session()->flash('success', 'Quantity was update successfully!');
        return response()->json(['success' => true]);
    }

    public function empty()
    {
        \Cart::instance('default')->destroy();
        return redirect()->route('shop.cart')->with('success', 'Successfully clear your shopping cast');
    }

    public function remove($id)
    {
        \Cart::instance('default')->remove($id);

        return redirect()->route('shop.cart')->with('success', 'Successfully remove item');
    }
}
