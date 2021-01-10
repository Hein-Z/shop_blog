<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\PriceFormatter;
use App\Http\Requests\ChcekoutRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use Cartalyst\Stripe\Exception\CardErrorException;
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

            $this->addToOrderTable($request, $bills, null);

            //successful
            \Cart::instance('default')->destroy();
            session()->forget('coupon');
            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            $this->addToOrderTable($request, $bills, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    protected function addToOrderTable($request, $bills, $error)
    {

        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_province' => $request->province,
            'billing_postalcode' => $request->postalcode,
            'billing_phone' => $request->phone,
            'billing_name_on_card' => $request->name_on_card,
            'billing_discount' => $bills['discount'],
            'billing_discount_code' => $bills['code'],
            'billing_subtotal' => $bills['newSubtotal'],
            'billing_tax' => $bills['newTax'],
            'billing_total' => $bills['newTotal'],
            'error' => $error,
        ]);

        // Insert into order_product table
        foreach (\Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }

    }

    protected function getBills()
    {
        $tax = 5 / 100;
        $bills['discount'] = session()->get('coupon')['discount'] ?? 0;
        $bills['newSubtotal'] = (int)\Cart::subTotal(false, '', '') - (int)$bills['discount'];
        $bills['newSubtotal'] = $bills['newSubtotal'] > 0 ? $bills['newSubtotal'] : 0;
        $bills['newTax'] = $bills['newSubtotal'] * $tax;
        $bills['newTotal'] = $bills['newSubtotal'] * (1 + $tax);
        $bills['total'] = \Cart::total(false, '', '');
        $bills['code'] = session()->get('coupon')['name'] ?? '';
        $bills['subtotal'] = \Cart::subtotal(false, '', '');
        $bills['tax'] = \Cart::tax(false, '', '');

        return $bills;
    }


}
