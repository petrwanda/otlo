<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/officer/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('officer.auth:officer');
    }

    /**
     * Show the Officer dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('officer.home');
    }

}