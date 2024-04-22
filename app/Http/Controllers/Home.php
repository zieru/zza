<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use App\Models\users;
use Illuminate\Http\Request;

class Home extends Controller
{
    //
	public function index(){
		$nilai = users::with('nilai')->get();
		return view('welcome',['nilai' => $nilai]);
	}
}
