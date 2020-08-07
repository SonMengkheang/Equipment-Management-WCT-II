<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Scalar\String_;

class UserCreateJoinClassController extends Controller
{
    public function index (){
        return view('frontend.joinClass');
    }

    public function joinClass (Request $request){

        $classCodeVerify = 'BE-Y3-4th';
        $status = (string)'congratulations';
        $getClassCode = DB::table('classes')->where('classCode',$classCodeVerify)->first();
        $classCodeInput = $request->input('joinClassCode');
        //dd($classCodeInput,$getClassCode);

        if ($getClassCode->classCode === $classCodeInput){
            dd($status);
        }

    }

    public function createClass (Request $request){

        $validator = Validator::make($request->all(), [
            'className' => ['required'] ,
            'classCode' => ['required', 'min:7', 'string', 'unique:classes'],
            'room' => ['required'],
            'section' => ['required'],
            'user_id' => ['required']
        ]);

//        $userId = $request->input('user_id');

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $class = new Classes();
        $class->className = $request->input('className');
        $class->classCode = $request->input('classCode');
        $class->room = $request->input('room');
        $class->section = $request->input('section');
        $class->user_id = $request->input('user_id');
        $class->save(); //saving the data into database ...

        //$admin->roles()->attach(auth::user()->id);

        return redirect()->route('home')
            ->with('success', 'Class Created Successfully');


    }
}
