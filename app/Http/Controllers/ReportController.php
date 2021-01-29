<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class ReportController extends VoyagerBaseController
{

    public function bestSellingReport()
    {
        $products = Product::query()
            ->join('order_product', 'order_product.product_id', '=', 'products.id')
            ->selectRaw('products.*, SUM(order_product.quantity) AS quantity_sold')
            ->groupBy(['products.id']) // should group by primary key
            ->orderByDesc('quantity_sold')
            ->paginate(10); // 10 best-selling products

        return view('vendor.voyager.reports.best-selling', compact('products'));
    }
}
