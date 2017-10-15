<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    

    public function index() {
    	return view("front.index", ["posts" => Post::where("published", true)->latest()->get()]);
    }

    public function about() {
    	return view("front.about");
    }


    public function contact() {
    	return view("front.contact");
    }
    
}
