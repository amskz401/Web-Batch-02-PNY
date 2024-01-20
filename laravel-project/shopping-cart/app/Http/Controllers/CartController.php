<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Orderitem;
use Session;
use Stripe;

class CartController extends Controller
{
    //
    public function index() {
        $products = Product::get();
        $data['products'] = $products;
        return view('product', $data);
    }

    public function add_to_cart( $id ) {
        $cart = Session::get('cart', []);
        
        $prod = Product::find($id);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $id,
                "title" => $prod->title,
                "price" => $prod->price,
                "quantity" => 1
            ];
        }
        
        Session::put('cart', $cart);
        Session::flash("message", "Product Added to cart");
        return back();
    }

    public function show_cart() {
        return view('cart');
    }

    public function removeItem( $id ) {
        $cart = Session::get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
        }
        Session::put('cart', $cart);
        return back()->with("message", "Item deleted from your cart");
    }

    public function processOrder( Request $request ) {
        

        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        \Stripe\Stripe::setApiKey(env('SK_STRIPE'));

        // Token is created using Stripe Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount' => 1 * 100,
            'currency' => 'usd',
            'description' => 'Charg for one dollar from 2nd batch 2nd',
            'source' => $request->stripeToken,
        ]);

        
        $orderID = Order::insert([
            "user_id" => 0,
            "total" => 78
        ]);
        $cart = Session::get('cart', []);
        foreach ($cart as $key => $value) {
           Orderitem::insert([
                "order_id" => $orderID->id,
                "item_id" => $value['id'],
                "quantity" => $value["quantity"]
           ]);
        }
        Session::flush();
        return view("thankyou");
        
    }
}
