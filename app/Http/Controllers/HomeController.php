<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application backend.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index (){
        //$class = DB::table()
        //$users =  DB::table('joined_class')->where('user_id',auth()->user()->id)->value('class_id');

        $users = DB::table('joined_class')
            ->join('classes', 'classes.id', '=', 'joined_class.class_id')
            ->join('users', 'users.id', '=', 'classes.user_id')
            ->where('joined_class.user_id',auth()->user()->id)
            ->get();
        //dd($users);

        return view('frontend.homepage',compact('users'));
    }
}
