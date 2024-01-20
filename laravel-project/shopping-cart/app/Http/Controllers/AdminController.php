<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index() {
        $users = User::get();
        $data['users'] = $users;
       
        return view('admin.home', $data);
    }

    public function user_form() {
        return view("admin.add-user");
    }

    public function save_user(Request $req) {

        if($req->hasFile('image')) {
            $file = $req->file('image');
            $file->move(public_path('assets/images'), $file->getClientOriginalName());
            // $file->store('images');


            $filePath = '/assets/images/'.$file->getClientOriginalName();
        }


        
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->image = $filePath;
        
        $user->save();

        // User::insert([
        //     'name' => $req->name,
        //     'email' => $req->email,
        //     'password' => $req->password
        // ]);
        
        session()->flash("message", "User added successfully");
        return redirect()->route("admin.home");
        
    }

    public function edit_user($id) {
        $user = User::find($id);
        $data['user'] = $user;
        return view("admin.edit-user", $data);
    }

    public function update_user(Request $req) {

        $user = User::find($req->id);

        if($req->hasFile('image')) {
            @unlink(public_path($user->image));
            $file = $req->file('image');
            $file->move(public_path('assets/images'), $file->getClientOriginalName());

            // $file->store('images');
            

            $filePath = '/assets/images/'.$file->getClientOriginalName();
        }

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->image = $filePath;
        $user->save();

        // User::where('id', $id)->udpate([
        //     'name' => $req->name,
        //     'email' => $req->email,
        //     'password' => $req->password
        // ]);
        
        session()->flash("message", "User Updated successfully");
        return redirect()->route("admin.home");
        
    }

    public function delete_user( $id ) {
        User::find($id)->delete();
        return back()->with("message", "User removed successfully");
    }
}
