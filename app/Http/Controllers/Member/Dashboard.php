<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    
	//
	public function index()
	{
		return view('members.index');
	}
	
}
