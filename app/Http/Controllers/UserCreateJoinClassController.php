<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserCreateJoinClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (){
        DB::table('classes')->get();
        $user = Auth::user()->classes;
        return view('frontend.joinClass',compact('user'));
    }

    public function joinClass (Request $request){

//        $classCodeVerify = 'H-D-001';
//        $getClassCode = DB::table('classes')->get();
//        $status = (string)'congratulations';



        $classCodeInput = $request->input('joinClassCode');
        $getClassCode = Classes::all();


//      $existClassCode = DB::table('classes')->where('classCode',$classCodeInput)->first();


        $joinClass = array();

        foreach ($getClassCode as $code) {
            if ($code->classCode === $classCodeInput){

                $joinClass['classCode'] = $code->classCode;
                $joinClass['class_id'] = $code->id;
                $joinClass['user_id'] = $request->input('user_id');

                DB::table('joined_class')->insert($joinClass);
                return redirect()->route('home')
                    ->with('success', 'You have Successfully joined this class');

            }else if($code->classCode === null){
                return redirect()->back()
                    ->with('success', 'This class does not exist');
            }
        }

//        $existClassCode = DB::table('joined_class')->get();
//
//        foreach ($existClassCode as $exist){
//            if ($exist->classCode === $classCodeInput){
//                return redirect()->back()
//                    ->with('success', 'You have joined this class');
//          }
//        }

        return redirect()->back()->with('success','wrong input class code');
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
