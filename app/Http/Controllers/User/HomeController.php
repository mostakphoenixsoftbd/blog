<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

    	//return "Welcome Home Controller";
    	//$posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
    	return view('user.blog');
    }

}