<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Log;
use Auth;

class PostController extends Controller
{
    
    public function index() {
    	return view("admin.posts.index", ["posts" => Post::all()]);
    }

    public function edit(Request $request, $id = null) {

    	if($request->isMethod("GET")) {
    		$post = null;
    		if(is_null($id) || is_null($post = Post::find($id))) {
    			return redirect()->back()->with("error", "Missing Required Parameter");
    		}
    		return view("admin.posts.edit", ["post" => $post]);
    	}
    	else {

    		Log::info($request);
    		
    		$this->validate($request, [
    			"id" => "required",
    			"title" => "required",
    			"post" => "required",
    			"published" => "required|boolean"
    		]);
    		
    		$post = null;

    		if(is_null($request->id) || is_null($post = Post::find($request->id))) {
    			return redirect()->back()->with("error", "Missing Required Parameter");
    		}

    		$post->title = $request->title;
    		$post->post = $request->post;
    		$post->published = $request->published;
    		$post->save();

    		return redirect()->back()->with("success", "Post Updated Successfully");

    	}
    }


    public function add(Request $request) {

    	if($request->isMethod("GET")) {
    		return view("admin.posts.add");
    	}
    	else {

    		Log::info($request);
    		
    		$this->validate($request, [
    			"title" => "required",
    			"post" => "required",
    			"published" => "required|boolean"
    		]);
    		
    		$post = new Post();
    		$post->title = $request->title;
    		$post->post = $request->post;
    		$post->published = $request->published;
    		$post->user_id = Auth::id();
    		$post->save();

    		return redirect()->back()->with("success", "Post Added Successfully");

    	}
    }


    public function delete(Request $request) {

    	$post = null;

		if(is_null($request->id) || is_null($post = Post::find($request->id))) {
			return redirect()->back()->with("error", "Missing Required Parameter");
		}

		if($post->user_id != Auth::id()) {
			return redirect()->back()->with("error", "You can't Delete What you did not create");
		}

		$post->delete();
		
		return redirect()->back()->with("success", "Post Deleted Successfully");
    }



   

}
