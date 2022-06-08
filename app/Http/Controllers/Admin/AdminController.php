<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Restaurant;
use App\Models\User;
use App\Models\Review;
use App\Http\Controllers\Controller;

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

    public function getAllRestos($id = null){
        if($id != null){
            $restos = Restaurant::find($id);
            //$restos = $restos? $restos->name : '';
        }else{
            $restos = Restaurant::all();
        }
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

    public function rejectReview($review_id){
        $rejectReview = Review::find($review_id);
        $rejectReview -> status = -1;
        $rejectReview -> save();
    }

     public function acceptReview($review_id){
        $acceptReview = Review::find($review_id);
        $acceptReview -> status = 1;
        $acceptReview -> save();
    }
}
