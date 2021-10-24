<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CalculateBills;
use App\Http\Controllers\Traits\PriceFormatter;
use App\Http\Requests\ChcekoutRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    use PriceFormatter, CalculateBills;

    public function index()
    {
        if(!\Cart::instance('default')->count()){
            return redirect()->back()->with('error',"You have no item in your cart to check out...");
        }

        if(!auth()->check()){
            return redirect()->route('login')->with('error','You should login to check out. Or you can check out as guest!');
        }

        $bills = $this->getBills();

        return view('shop.checkout')->with(['bills' => $bills]);
    }


     public function guestIndex()
    {
        if(!\Cart::instance('default')->count()){
            return redirect()->back()->with('error',"You have no item in your cart to check out...");
        }
        $bills = $this->getBills();

        return view('shop.checkout')->with(['bills' => $bills]);
    }

    public function store(ChcekoutRequest $request)
    {
        if ($this->productIsNoLongerAvaliable()) {
            return back()->withErrors("Sorry one of the products in your cart is no longer available...:'(");
        }
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
            $this->decreaseQuantity();
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

    public function decreaseQuantity()
    {
        foreach (\Cart::content() as $item) {
            $product = Product::find($item->model->id);
            $product->update(['quantity' => $product->quantity - $item->qty]);
        }
    }

    public function productIsNoLongerAvaliable()
    {
        foreach (\Cart::content() as $item) {
            $product = Product::find($item->model->id);
            if ($product->quantity < $item->qty)
                return true;
        }
        return false;
    }
}
