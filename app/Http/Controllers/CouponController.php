<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CalculateBills;
use App\Http\Controllers\Traits\PriceFormatter;
use App\Models\Coupon;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    use PriceFormatter, CalculateBills;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        if (!$coupon) {
            return response()->json(['invalid' => true]);
        }

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(\Cart::subtotal(false, '', '')),
        ]);
        $bills = $this->getBills();
        return response()->json(['bills' => $bills,'coupon'=>session()->get('coupon')]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');
        $bills = $this->getBills();

        return response()->json($bills);
//        return redirect()->back()->with('success', 'Coupon has been removed');
    }
}
