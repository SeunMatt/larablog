<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    
    public function view($id) {
    	$post = Post::find($id);
    	if(is_null($post)) {
    		return redirect()->route("front.index")->with("error", "Post Not Found!");
    	}

    	//increment count using a Job in the background
    	
    	//return post			
    	return view("front.view", ["post" => $post]);
    }
}
