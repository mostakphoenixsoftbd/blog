<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
	
	//return "Good Afternoon! Post Controller!!!";
    return view('user.post');	

    }
}
