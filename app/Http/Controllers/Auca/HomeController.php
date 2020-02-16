<?php

namespace App\Http\Controllers\Auca;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/auca/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auca.auth:auca');
    }

    /**
     * Show the Auca dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('auca.home');
    }

}