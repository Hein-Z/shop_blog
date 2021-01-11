<?php

namespace App\Http\Controllers\Traits;


trait CalculateBills
{
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
