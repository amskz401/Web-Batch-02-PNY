<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontViewController extends Controller
{
    public function getProducts() {
        $products = Product::all();
        $data['title'] = "Product Page";
        $data['products'] = $products;
        return view("index", $data);
    }
}
