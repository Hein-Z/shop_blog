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
        if (\Cart::count() <= 0) {
            return redirect()->route('shop.index');
        }
        $bills = $this->getBills();

        return view('shop.checkout')->with(['bills' => $bills]);
    }

    public function store(ChcekoutRequest $request)
    {
        $bills = $this->getBills();

        $contents = \Cart::instance('default')->content()->map(
            function ($item) {
                return $item->model->slug . ',' . $item->qty . ',' . 'Details : ' . $item->model->details;
            }
        )->values()->toJson();

        try {
            $charge = \Stripe::charges()->create([
                'amount' => $bills['newTotal'] / 100,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => \Cart::instance('default')->count(),
                    'discount' => $bills['discount'] / 100
                ],
            ]);
            //successful
            \Cart::instance('default')->destroy();
            session()->forget('coupon');
            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    protected function getBills()
    {
        $tax = 5 / 100;
        $bills['discount'] = session()->get('coupon')['discount'] ?? 0;
        $bills['newSubtotal'] = (int)\Cart::subTotal(false, '', '') - (int)$bills['discount'];
        $bills['newTax'] = $bills['newSubtotal'] * $tax;
        $bills['newTotal'] = $bills['newSubtotal'] * (1 + $tax);
        $bills['total'] = \Cart::total(false, '', '');
        $bills['subtotal'] = \Cart::subtotal(false, '', '');
        $bills['tax'] = \Cart::tax(false, '', '');

        return $bills;
    }


}
