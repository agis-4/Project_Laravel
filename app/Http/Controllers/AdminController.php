<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getLogin(){
	  return view('login.index');
	}

	public function postLogin(){
		echo "lalalalal";
	}
}
