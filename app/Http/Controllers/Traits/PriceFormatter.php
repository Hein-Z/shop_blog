<?php

namespace App\Http\Controllers\Traits;


trait PriceFormatter
{
    public function priceFormat($price)
    {
        return '$' . bcdiv($price,100,2);
    }
}
