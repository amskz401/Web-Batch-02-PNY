<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class HandleUserController extends Controller
{
    //

    public function checkUser(Request $req) {
        
        $user = User::where("email", $req->email)->first();
        if($user) {
            if(Hash::check($req->password, $user->password)) {
                $token = $user->createToken("Angular_User_Token");
                return response()->json(['token' => $token->plainTextToken, 'user' => $user]);

                return response()->json(["message" => "success", "user" => $user]);
            } else {
                return response()->json(["message" => "Invalid Password"]);
            }
        } else {
            return response()->json(["message" => "User not found"]);
        }
    }

    public function addUser(Request $req) {
        $data = $req->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return response()->json($user);
    }

    public function getUser($id) {
        return response()->json(["userID" => $id]);
    }

    public function save_task(Request $req) {
        $input = $req->all();
        $res = DB::table("tasks")->insert(["name" => $input['task'], "type" => "n"]);
        $res = ["message", "task added"];
        return response()->json($res);
    }

    public function getTask($param = "") {
        if($param) {
            $task = DB::table("tasks")->where('type', $param)->get();
        } else {
            $task = DB::table("tasks")->get();
        }
        
        return response()->json($task);
    }

    public function updateTask($id) {
        
        DB::table("tasks")->where("id", $id)->update(["type"=> "c"]);
        
        $res = ["message", "task completed"];
        return response()->json($res);
    }

    public function deleteTask($id) {
        
        DB::table("tasks")->where("id", $id)->delete();
        
        $res = ["message", "task deleted"];
        return response()->json($res);
    }

    public function allUsersList($start = 0, $limit = 10) {
        $count = User::get();
        $users = User::offset($start)->limit($limit)->get();
        $data["count"] = count($count);
        $data["users"] = $users;
        return response()->json($data);
    }
}

