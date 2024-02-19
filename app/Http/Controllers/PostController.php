<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::select('posts.*')
        ->join('abouts', 'abouts.id', '=', 'posts.id_about')
        ->orderBy('created_at', 'desc')
        ->get();
    	return view('wisatawan.Post', ['posts' => $posts]);
    }


    public function postCreatePost(Request $request)
    {
    	$this->validate($request,[
    		'body' => 'required|max:1000'
    	]);
    	$post = new Post();
    	$post->body = $request['body'];
    	$post->id_about = $request['id_about'];
    	$message = 'There was an error';
    	if ($request->user()->posts()->save($post)) {
    		$message = 'Post Successfully created!';
    	};
    	return redirect('post')->with(['message' => $message]);
    }

    public function getDeletePost($post_id)
    {
    	$post = Post::where('id', $post_id)->first();
    	if(Auth::user() != $post->user) {
    		return redirect()->back();
    	}
    	$post->delete();
    	return redirect('post')->with(['message' => 'Succesfully deleted']);

    }


}
