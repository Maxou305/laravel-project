<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dump($request->all());

        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->meow_id = $request->input('meow_id');
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect()->route('meows');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        dump($id);
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('meows');
    }
}
