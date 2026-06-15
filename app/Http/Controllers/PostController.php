<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Events\PostCreate;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $posts = Post::get();

        return view('posts', compact('posts'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'title' => 'required',
             'body' => 'required'
        ]);
   
        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'body' => $request->body
        ]);

        broadcast(new MessageSent($request->title))->toOthers();
   
        return response()->json([
            'success' => true,
            'message' => 'Post created successfully.']);
    }


    public function ajaxPosts()
    {
        $posts = Post::latest()->get();

        // Return HTML for the table rows
        $html = view('posts.partials.table', compact('posts'))->render();

        return response()->json(['html' => $html]);
    }
    
}