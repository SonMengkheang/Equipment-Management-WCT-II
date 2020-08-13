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
        $users =  DB::table('joined_class')->where('user_id',auth()->user()->id)->get();
        return view('frontend.homepage',compact('users'));
    }
}
