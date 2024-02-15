<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HandleUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post("register-user", [HandleUserController::class, "addUser"]);

Route::get("get-user/{id}", [HandleUserController::class, "getUser"]);

Route::post("check-login", [HandleUserController::class, "checkUser"]);

// protected
Route::group( ["middleware" => ['auth:sanctum']], function(){
    Route::get("/validate-token", function(){
        return response()->json(["success" => true]);
    });
    Route::post("/save-task", [HandleUserController::class, "save_task"]);
    Route::get("/get-tasks/{param?}", [HandleUserController::class, "getTask"]);
    Route::get("/update-task/{id}", [HandleUserController::class, "updateTask"]);
    Route::get("/delete-task/{id}", [HandleUserController::class, "deleteTask"]);
    Route::get("/all-users/{offset}/{limit}", [HandleUserController::class, "allUsersList"]);
});
