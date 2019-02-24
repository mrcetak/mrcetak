<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function tampildesain(){
		return view('layouts.desain');
	}

}
