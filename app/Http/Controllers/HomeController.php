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
     * About page
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Contact page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
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

    /**
     * View the details for a single participating restaurant
     * This will be changed or removed later
     *
     * @return \Illuminate\Http\Response
     */
    public function example_restaurant()
    {
        return view('example-restaurant');
    }

    /**
     * View the receipt-view page
     *
     * @return \Illuminate\Http\Response
     */
    public function receipt_view()
    {
        return view('receipt-view');
    }
}
