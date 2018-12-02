<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Account page
     *
     * @return \Illuminate\Http\Response
     */
    public function account()
    {
        return view('account');
    }


    /**
     * View list of participating restaurants page
     *
     * @return \Illuminate\Http\Response
     */
    public function view_restaurants()
    {
        return view('view-restaurants');
    }
}
