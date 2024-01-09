<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function productDetails($id = 0) {
        $product = Product::find($id);
        dd($product);
    }

    public function shoppingCart() {
        return view("shopping-cart");
    }
}
