<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function signUp(Request $request, $user_type_id){
        $user = [];
        $user["name"] = $request->name;
        $user["email"] = $request->email;
        $user["password"] = $request->password;
        $user["user_type_id"] = $user_type_id;

        return response()->json([
            "status" => "Success",
            "users" => $user
        ], 200);
    }


}
