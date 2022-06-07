<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;

class RestoController extends Controller{


    public function addResto(Request $request){
        $resto = new Restaurant;
        $resto->name = $request->name;
        $resto->description = $request->description;
        $resto->save();

        return response()->json([
            "status" => "Success"
        ], 200);
    }

}
