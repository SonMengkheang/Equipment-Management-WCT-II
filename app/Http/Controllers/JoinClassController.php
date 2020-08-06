<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class JoinClassController extends Controller
{
    public function index (){
        return view('frontend.joinClass');
    }

    public function joinClass (Request $request){
//      $getClassCode = DB::table('classes')->where('classes.classCode','ITE-3 X')->get();
        $classCodeInput = $request->input('joinClassCode');
        //dd($classCodeInput);

//        if($getClassCode == $classCodeInput ){
//            dd($getClassCode);
//        }
    }
}
