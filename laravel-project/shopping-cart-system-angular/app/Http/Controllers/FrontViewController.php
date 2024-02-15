<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\User;
use Session;
use DB;
use Str;

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

    public function get_users($id = 0)
    {
        if($id > 0) {
            $users = User::find($id);
        } else {
            $users = User::get();
        }
        
        return response()->json($users);
    }

    public function registerUser(Request $req) {
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        return response()->json(["user registered"]);
    }

    public function check_login(Request $req) {
        $user = User::where("email", $req->email)->first();
        if($user) {
            if (Hash::check($req->password, $user->password)) {
                $token = $request->user()->createToken("Angular_User_Token");
                return response()->json(['token' => $token->plainTextToken, 'user' => $user]);
            } else {
                return response()->json(["msg" => "invalid password"]);
            }
        } else {
            return response()->json(["msg" => "user not found"]);
        }
        
    }

    public function delete_user($id) {
        $find = User::find($id);
        if($find) {
            User::where("id", $id)->delete();
            return response()->json(["msg" => "user deleted"]);
        } else {
            return response()->json(["msg" => "user not found"]);
        }
    }

    public function dumm_users() {
        for ($i=0; $i < 500; $i++) { 
            $name = Str::random(10);

            User::create([
                "name" => $name,
                "email" => $name."@email.com",
                "password" => Hash::make($name)
            ]);
        }
        echo "done";
    }
}
