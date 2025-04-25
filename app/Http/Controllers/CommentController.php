<?php

namespace App\Http\Controllers;
use App\Models\DonationRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    use AuthorizesRequests;

    /**
     * @desc Display list of comment
     * @route GET /comment
     * @return View
     */
    public function index(): View {
        $title = "Comments";
        $comments = Comment::all();
        return view('comment.index', compact('title', 'comments'));
    }

    /**
     * @desc Show the form to create a new comment
     * @route GET /comment/create
     * @return View
     */
    public function create(DonationRequest $donationRequest): View {
        $title = "Add Your Comment";
        return view('comment.create', compact('title', 'donationRequest'));
    }

    /**
     * @desc Store a comment in the database
     * @route POST /comment
     * @param Request $request
     * @return View
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'comment' => 'required|string|max:255',
            'donation_request_id' => 'required|exists:donation_requests,id',
        ]);

        $validatedData['user_id'] = $request->user()->id;
        Comment::create($validatedData);
//        $token = $request->input('_token');
//        $parent_comment = $request->input('parent_comment');
//        $comment = $request->input('comment');
//        return "Token: $token, Parent Comment: $parent_comment, Comment: $comment";
//
        return redirect()->route('donation-request.show', $validatedData['donation_request_id'])
            ->with('success', 'Comment created successfully.');
    }

    /**
     * @desc Display a form to edit a comment
     * @route GET /comment/{id}/edit
     * @param $id
     * @return string
     */
    public function edit(Comment $comment): View
    {
        // Check if the user is authorized
        $this->authorize('update', $comment);
        $title = "Edit Comment";
        return view('comment.edit', compact('comment', 'title'));
    }
    /**
     * @desc Show single comment details
     * @route GET /comment/{id}
     * @param $id
     * @return string
     */
    public function show(Comment $comment): View
    {
        return view('comment.show', compact('comment'));
    }

    /**
     * @desc Update a comment in the database
     * @route PUT /comment/{id}
     * @param Request $request
     * @param $id
     * @return string
     */
    public function update(Request $request, Comment $comment): RedirectResponse
    {
        // Check if the user is authorized
        $this->authorize('update', $comment);
        $validatedData = $request->validate([
            'comment' => 'required|string|max:500',
        ]);
        $comment->update($validatedData);
        return redirect()->route('comment.index')->with('success', 'Comment updated successfully.');
    }

    /**
     * @desc Delete a comment from the database
     * @route DELETE /comment/{id}
     * @param $id
     * @return string
     */
    public function destroy(Comment $comment): RedirectResponse
    {
        // Check if the user is authorized
        $this->authorize('update', $comment);
        if ($comment->user_id !== request()->user()->id) {
            return redirect()->route('comment.index')->with('error', 'You are not allowed to delete this comment.');
        }
        $comment->delete();

        return redirect()->route('comment.index')->with('success', 'Comment deleted successfully.');
    }
}

