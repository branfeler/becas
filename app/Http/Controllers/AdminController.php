<?php

namespace sisdbe\Http\Controllers;

use Illuminate\Http\Request;

use sisdbe\Http\Requests;

class AdminController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	return view('admin.index');
    }
}
