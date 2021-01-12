<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\PriceFormatter;

class SavedItemsController extends Controller
{
    use PriceFormatter;

    public function switchToSaved($id)
    {
        $item = \Cart::instance('default')->get($id);


        $duplicate = \Cart::instance('save')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });
        if ((int)$duplicate->isNotEmpty()) {
            return response()->json(['message' => 'this item is alreadySaved'],400);
        }

        \Cart::instance('default')->remove($id);


        \Cart::instance('save')->add($item->id,
            $item->name,
            1,
            $item->price,
            ['extra' => $item->extra],
            $item->taxRate
        )->associate('App\Models\Product');

        return response()->json(['message' => 'success']);
    }

    public function switchToCart($id)
    {
        $item = \Cart::instance('save')->get($id);


        $duplicate = \Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });;

        if ((int)$duplicate->isNotEmpty()) {
            return response()->json(['message' => 'this item is alreadySaved'],400);
        }

//        \Cart::instance('save')->remove($id);

        \Cart::instance('default')->add($item->id,
            $item->name,
            1,
            $item->price,
            ['extra' => $item->options->extra],
            $item->taxRate
        )->associate('App\Models\Product');

        return response()->json(['message' => 'success']);

    }

    public function empty()
    {
        \Cart::instance('save')->destroy();
        return response()->json(['success']);
    }

    public function remove($id)
    {
        \Cart::instance('save')->remove($id);
        return response()->json(['success']);
    }
}
