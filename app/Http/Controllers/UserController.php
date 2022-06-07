<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function signUp(Request $request, $usertype_id){
        $user = new User;
        $user["name"] = $request->name;
        $user["email"] = $request->email;
        $user["password"] = $request->password;
        $user["usertype_id"] = $usertype_id;
        $user["restaurant_id"] =0;
        $user->save();

        return response()->json([
            "status" => "Success",
            "users" => $user
        ], 200);
    }


}
