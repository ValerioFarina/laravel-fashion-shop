<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dress;

class DressController extends Controller
{
    public function index() {
        $dresses = Dress::all();
        $sale_prices = $dresses->map(function($dress) {
            $sale_price = $dress->price - (($dress->price * $dress->percentage_discount) / 100);
            $sale_price = number_format($sale_price, 2, ",", ".");
            return $sale_price;
        });
        $data = [
            'dresses' => $dresses,
            'sale_prices' => $sale_prices
        ];
        return view('dresses', $data);
    }
}
