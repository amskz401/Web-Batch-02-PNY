<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use Str;


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

    public function addToCart($id = 0) {
        $getProduct = Product::find($id);
        
        $product = [
            "id" => $getProduct->id,
            "title" => $getProduct->title,
            "price" => $getProduct->price,
            "image" => $getProduct->image,
            "qantity" => 1
        ];

        $exists = false;
        foreach(Session::get('cart') as $c) {
            if($c['id'] == $id) {
                Session::get('cart')[$id]['qantity'] = Session::get('cart')[$id]['qantity'] + 1;
                
                $exists = true;
            }
        }
        
        if(!$exists){
            Session::push("cart", $product);
        }
        
        Session::flash("message", "Item added to cart successfully");
        return back();
    }

    public function add_product() {
        return view('add-product');
    }

    public function post_product(Request $request) {
        $request->validate([
            "email" => "required|email",
            "title" => "required",
            "price" => ["required", "numeric"],
            "image" => ["mimes:png,jpg,jpeg"]
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileExt = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalName();
            $newName = $fileName.'_'.Str::random(10).'.'.$fileExt;
            $file->move(public_path("images"), $newName);
            $request->file('image')->store('images');

        }

        echo "done";
        
    }
}
