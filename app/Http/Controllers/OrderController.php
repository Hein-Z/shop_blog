<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('billing_email', auth()->user()->email)->with('products')->get();
        return view('my-order', compact('orders'));
    }

    public function show(Request $request)
    {

        $order=Order::where('id',$request->id)->first();

        if ($order->billing_email !== auth()->user()->email) {
            return back()->with('error', 'You have no access to get this page');
        }
        return view('my-order-details', compact('order'));
    }
}
