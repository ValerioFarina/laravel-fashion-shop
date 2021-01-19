<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dress;

class DressController extends Controller
{
    public function index() {
        $dresses = Dress::all();
        dd($dresses);
        // return view('dresses');
    }
}
