<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DressController extends Controller
{
    public function index() {
        return view('dresses');
    }
}
