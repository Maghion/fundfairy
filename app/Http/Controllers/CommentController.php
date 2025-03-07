<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentController extends Controller
{

    public function index(): View
    {
        $title = 'Comments';
        $comments = ['Comment 1', 'Comment 2', 'Comment 3'];
        return view('comment.index', compact('title', 'comments'));
    }

    public function create(): View
    {
        $title = 'New Comment';
        return view('comment.create', compact('title'));
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "Title: $title, Description: $description";
    }

//    public function show(string $id): string
//    {
//        return "Showing comment: $id";
//    }
    public function show(Comment $comment): View
    {
        return view('comments.show', compact('comment'));
    }

    /**
     * @desc show the form for editing a single comment.
     * @route  GET/comment/{id}/
     */
    public function edit($id){
        return "Edit comment: $id";
    }

    /**
     * @desc update the comment from storage.
     * @route update /comment/{id}
     */
    public function update(Request $request, $id)
    {
        return "You have updated comment: $id";
    }

    /**
     * @desc Remove the comment from storage.
     * @route DELETE /comment/{id}
     */
    public function destroy(string $id): string{
        return "You have deleted comment: $id";
    }
}
