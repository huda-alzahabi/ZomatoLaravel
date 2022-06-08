<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signUp(Request $request, $usertype_id){
        $user = new User;
        $user["name"] = $request->name;
        $user["email"] = $request->email;
        $user["password"] = Hash::make($request->password);
        $user["usertype_id"] = $usertype_id;
        $user["restaurant_id"] =0;
        $user->save();

        return response()->json([
            "status" => "Success",
            "users" => $user
        ], 200);
    }

    public function login(Request $request){
        $user = User::where("email",$request->email)->first();
        if (Hash::check($request->password, $user->password)) {
            return response()->json([
                "status" => "Success",
                "results" => "$user->name Logged in"
            ], 200);
        }

        return response()->json([
                "status" => "Error",
                "results" => "Incorrect Email or Password"
        ], 200);
    }

    public function editProfile(Request $request,$user_id){
       $user = User::find($user_id);
       if($request->name) $user["name"] = $request->name;
       if($request->email) $user["email"] = $request->email;
       if($request->password) $user["password"] = $request->password;
       $user->save();

    }
    public function submitReviews(Request $request){
        $review = new Review;
        $review["stars"] = $request->stars;
        $review["comments"] = $request->comments;
        $review["user_id"] = $request->user_id;
        $review["restaurant_id"] = $request->restaurant_id;
        $review["status"] = 0;
        $review->save();

        return response()->json([
            "status" => "Success",
            "users" => $review
        ], 200);
    }


}
