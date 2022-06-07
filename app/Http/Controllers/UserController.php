<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;

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