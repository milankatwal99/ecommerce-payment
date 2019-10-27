<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontendController extends Controller
{
    public function index()
    {
        return view("welcome")->with('products',Product::paginate(3));
    }
}
