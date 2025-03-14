<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * @desc Display list of comment
     * @route GET /comment
     * @return View
     */
    public function index(): View {
        $title = "Comments";
        $comments = [
            "Wishing you the best!",
            "Great work!",
            "Almost there!"
        ];
        return view('comment.index', compact('title', 'comments'));
    }

    /**
     * @desc Show the form to create a new comment
     * @route GET /comment/create
     * @return View
     */
    public function create(): View {
        $title = "Add Comment";
        return view('comment.create', compact('title'));
    }

    /**
     * @desc Store a comment in the database
     * @route POST /comment
     * @param Request $request
     * @return string
     */
    public function store(Request $request): string {
        $token = $request->input('_token');
        $parent_comment = $request->input('parent_comment');
        $comment = $request->input('comment');

        return "Token: $token, Parent Comment: $parent_comment, Comment: $comment";
    }

    public function show(Comment $comment): View
    {
        return view('comments.show', compact('comment'));
    }

    /**
     * @desc Display a form to edit a comment
     * @route GET /comment/{id}/edit
     * @param $id
     * @return string
     */
    public function edit($id): string {
        return "<h1>Edit comment $id</h1>";
    }

    /**
     * @desc Update a comment in the database
     * @route PUT /comment/{id}
     * @param Request $request
     * @param $id
     * @return string
     */
    public function update(Request $request, $id): string {
        return "<h1>Update Comment $id</h1>";
    }

    /**
     * @desc Delete a comment from the database
     * @route DELETE /comment/{id}
     * @param $id
     * @return string
     */
    public function destroy($id): string {
        return "<h1>Delete comment $id</h1>";
    }


    /**
     * @desc Show single comment details
     * @route GET /comment/{id}
     * @param $id
     * @return string
     */
    public function show($id): string {
        return "<h1>Show Comment $id</h1>";
    }
}
