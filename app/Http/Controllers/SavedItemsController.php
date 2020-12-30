<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\PriceFormatter;
use App\Models\Product;
use Illuminate\Http\Request;

class SavedItemsController extends Controller
{
    use PriceFormatter;


    public function index()
    {

        $mayLikes = Product::inRandomOrder()->take(3)->get();
        $items = \Cart::instance('save')->content();
        $bills['total'] = $this->priceFormat(\Cart::total(false, '', ''));
        $bills['subtotal'] = $this->priceFormat(\Cart::subtotal(false, '', ''));
        $bills['tax'] = $this->priceFormat(\Cart::tax(false, '', ''));

        return view('shop.save-for-later')->with(['mayLikes' => $mayLikes, 'items' => $items, 'bills' => $bills]);
    }

    public function switchToSaved($id)
    {
        $item = \Cart::get($id);
        \Cart::remove($id);


        $duplicate = \Cart::instance('save')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });
        if ((int)$duplicate->isNotEmpty()) {
            return redirect()->route('shop.saved')->with('success', 'This item is already saved');
        }

        \Cart::instance('save')->add($item->id,
            $item->name,
            $item->qty,
            $item->price,
            ['extra' => $item->extra],
            $item->taxRate
        )->associate('App\Models\Product');


        return redirect()->route('shop.saved')->with('success', 'Successfully added to your saved items');
    }

    public function switchToCart($id)
    {
        $item = \Cart::instance('save')->get($id);

        \Cart::instance('save')->remove($id);


        $duplicate = \Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });;

        if ((int)$duplicate->isNotEmpty()) {
            return redirect()->route('shop.cart')->with('success', 'This item is already in your shopping cart');
        }
//
        \Cart::instance('default')->add($item->id,
            $item->name,
            $item->qty,
            $item->price,
            ['extra' => $item->options->extra],
            $item->taxRate
        )->associate('App\Models\Product');


        return redirect()->route('shop.cart')->with('success', 'Successfully added to your shopping cart');
    }

    public function empty()
    {
        \Cart::instance('save')->destroy();
        return redirect()->route('shop.saved')->with('success', 'Successfully clear your saved items');
    }

    public function remove($id)
    {
        \Cart::instance('save')->remove($id);
        return redirect()->route('shop.saved')->with('success', 'Successfully remove item');
    }
}
