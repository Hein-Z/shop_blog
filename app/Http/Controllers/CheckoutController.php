<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\PriceFormatter;
use App\Http\Requests\ChcekoutRequest;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    use PriceFormatter;

    public function index()
    {
        $items = \Cart::content();
        $bills['total'] = $this->priceFormat(\Cart::total(false, '', ''));
        $bills['subtotal'] = $this->priceFormat(\Cart::subtotal(false, '', ''));
        $bills['tax'] = $this->priceFormat(\Cart::tax(false, '', ''));
        return view('shop.checkout')->with(['items' => $items, 'bills' => $bills]);
    }

    public function store(ChcekoutRequest $request)
    {
        $contents = \Cart::instance('default')->content()->map(
            function ($item) {
                return $item->model->slug . ',' . $item->qty . ',' . 'Details : ' . $item->model->details;
            }
        )->values()->toJson();

        try {
            $charge = \Stripe::charges()->create([
                'amount' => \Cart::instance('default')->total(false, '', '') / 100,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => \Cart::instance('default')->count(),
                ],
            ]);
            \Cart::instance('default')->destroy();
            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }
}
