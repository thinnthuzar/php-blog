<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function run(){
        return "this is run";
    }

    public function exchange(Request $request){
      // return $request->photo;
       $request->photo->storeAs('upload-test','aa.jpg');
       return $request->photo;
        //return $request->amount*$request->currency;

    }

    
}
