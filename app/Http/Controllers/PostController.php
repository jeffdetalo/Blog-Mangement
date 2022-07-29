<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::with('categories')->get();
        return ($post);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return $post;
    }

    public function create($id, $category_id, Request $request)
    {
        $writer = Writer::find($id);
        $writer->posts()->create([
            'title' => $request->title,
            'photo' => $request->photo,
            'video' => $request->video,
            'text' => $request->text,
            'time' => $request->time,
            'category_id' => $request->category_id
        ]);

        $category = Category::find($category_id);
        $get_post_id = Post::orderBy('id', 'desc')->first()->id;
        $category->posts()->attach($get_post_id);
    }
       
    public function update($post_id,Request $request)
    {
        $post = Post::find($post_id)->update([
            'title' => $request->title,
            'photo' => $request->photo,
            'video' => $request->video,
            'text' => $request->text,
            'time' => $request->time,
        ]);
        return $post;
    }

    public function delete($post_id)
    {
        $post = Post::find($post_id);
        $post->comments()->delete();
        $post->delete();

    }
}
