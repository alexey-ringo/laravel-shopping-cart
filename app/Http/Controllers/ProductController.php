<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProductController extends Controller
{
    public function getIndex() {
        $products = Product::All();
        return view('shop.index', ['products' => $products]);
    }
}
