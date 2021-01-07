<?php

namespace App\Http\Controllers\Traits;


trait PriceFormatter
{
    public function priceFormat($price)
    {
        return '$' . $price;
    }
}
