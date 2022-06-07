<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;
use App\Models\User;
use App\Models\Review;

class AdminController extends Controller{

    public function addResto(Request $request){
        $resto = new Restaurant;
        $resto->name = $request->name;
        $resto->description = $request->description;
        $resto->save();

        return response()->json([
            "status" => "Success"
        ], 200);
    }

    public function getAllRestos(){
           $restos = Restaurant::all();

            return response()->json([
                "status" => "Success",
                "restos" => $restos
            ], 200);
    }

    public function getAllUsers(){
           $users = User::all();

            return response()->json([
                "status" => "Success",
                "users" => $users
            ], 200);
    }

    public function getAllReviews(){
           $reviews = Review::all();

            return response()->json([
                "status" => "Success",
                "users" => $reviews
            ], 200);
    }

}
