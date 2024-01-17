<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use DB;

class FrontViewController extends Controller
{
    public function getProducts() {
        // Session::flush();
        $products = Product::all();
       
        $data['title'] = "Product Page";
        $data['products'] = $products;
        return view("index", $data);
    }

    public function showMig() {
        $data = DB::table("migrations")->select("id")->offset(4)->limit(2)->orderBy("id", "asc")->get();
        dd($data);
    }
}
