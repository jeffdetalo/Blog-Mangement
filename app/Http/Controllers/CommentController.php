<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comment = Comment::All();
        return $comment;
    }

    public function show($id)
    {
        $comment = Comment::find($id);
        return $comment;
    }


    public function create($id, Request $request)
    {
        $post = Post::find($id);
        $post->comments()->create([
                'text' => $request->text,
                'time' => $request->time,
                'writer_id' => $request->writer_id,
            ]);
    }

    public function update($comment_id, Request $request)
    {
        Comment::find($comment_id)->update([
            'text' => $request->text,
            'time' => $request->time,
        ]);
    }

    public function delete($comment_id)
    {
        Comment::find($comment_id)->delete();
    }
}
