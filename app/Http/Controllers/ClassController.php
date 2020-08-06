<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Product;
use App\User;
use Carbon\Traits\Date;
use DateTime;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        DB::table('classes')->get();
        $user = Auth::user()->classes;
        return view('classes.classList',compact('user'));
    }

    public function borrowedClass(){
        DB::table('classes')->get();
        $user = Auth::user()->classes;
        return view('borrowers.classCard',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
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

        return redirect()->route('classes.index')
                ->with('success', 'Class Created Successfully');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $classes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param $id
     * @return string
     */
    public function edit(Request $request, $id)
    {
        $class = DB::table('classes')->where('id',$id)->first();
        return redirect()->route('classes.update',compact('class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $rule = [
            'className' => ['sometimes'] ,
            'classCode' => ['sometimes', 'min:7', 'string', 'unique:classes'],
            'room' => ['sometimes'],
            'section' => ['sometimes'],
            'user_id' => ['sometimes'],
        ];

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $className = $request->input('className');
        $classCode = $request->input('classCode');
        $room = $request->input('room');
        $section = $request->input('section');
        $updated_at = new DateTime();

        $class = Classes::find($id);
//        $class = DB::table('classes')->where('id',$id)->first();

        $class->className = $className ?: $class->className;
        $class->classCode = $classCode ?: $class->classCode;
        $class->room = $room ?: $class->room;
        $class->section = $section ?: $class->section;
        $class->updated_at = $updated_at ?: $class->updated_at;

        $class->save();   //save into database
        return redirect()->route('classes.index')
            ->with('success', 'class has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classes  $classes
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $class = Classes::findOrFail($id);
        $class->delete();
        return redirect()->route('classes.index')
            ->with('success_message', 'Product has been deleted!');
    }
}
