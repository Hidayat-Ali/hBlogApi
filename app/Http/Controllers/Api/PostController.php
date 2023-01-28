<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return response()->json(['posts' => $posts]);
    }


    public function insertPost(Request $request)
    {

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return response()->json(['status' => 'post Saved Successfully']);
    }

    public function DeletePost($id)
    {
        Post::where('id', $id)->delete();

        return response()->json(['status' => 'deleted successfully']);
    }


    public function UpdatePost(Request $request, $id)
    {
        $post = Post::find($id)->first();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->update();
        return response()->json(['status' => 'updated successfully']);
    }
}
