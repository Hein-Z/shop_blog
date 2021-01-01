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
        $items = \Cart::content();
        $bills['total'] = $this->priceFormat(\Cart::total(false, '', ''));
        $bills['subtotal'] = $this->priceFormat(\Cart::subtotal(false, '', ''));
        $bills['tax'] = $this->priceFormat(\Cart::tax(false, '', ''));
        $qty = \Cart::count();
        $saved_items = \Cart::instance('save')->content();

        return view('shop.cart')->with(['mayLikes' => $mayLikes, 'items' => $items, 'bills' => $bills, 'saved_items' => $saved_items, 'qty' => $qty]);
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
            0.5
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
