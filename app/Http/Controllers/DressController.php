<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dress;

class DressController extends Controller
{
    public function index() {
        $dresses = Dress::all();
        $sale_prices = $dresses->map(function($dress) {
            return $dress->price - (($dress->price * $dress->percentage_discount) / 100);
        });
        $data = [
            'dresses' => $dresses,
            'sale_prices' => $sale_prices
        ];
        return view('dresses', $data);
    }
}
