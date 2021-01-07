<?php

function productImage($path)
{
    return $path && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('images/product-default.jpg');
}

function priceFormat($price)
{
    return '$' . bcdiv($price,100,2);
}
