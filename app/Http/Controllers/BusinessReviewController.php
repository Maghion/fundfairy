<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class  BusinessReviewController extends Controller
{
    /**
     * @desc  Show all reviews
     * @route Get /business-review
     * @return View
     */
    public function index():View{
        $title = "View all Reviews";
        $reviews =[
            'Great Experience with FactoryPlus!',
            'Excellent Plumbing Service',
        ];

        return view('business-review.index', compact('title', 'reviews'));
    }

    /**
     * @desc Show the form to create a new job
     * @route Get /business-review/create
     * @return View
     */

    public function create(): View {
        $title = "Create New Review";
        return view('business-review.create' , compact('title'));
    }



    /**
     * @desc Store a review in the databse
     * @route POST /business-review
     * @param Request $request
     * @return string //return datatype
     */
    public function store(Request $request):string {
        $token = $request->input('_token'); //prevent from scammer
        $title = $request->input('title');
        $rating = $request->input('rating');
        $comment = $request->input('comments');

        return "Token: $token,Title: $title, Rating: $rating, Comment: $comment";
    }


    /**
     * @desc Display a single review
     * @route GET /business-review/{id}
     * @param $id
     * @return string
     */
    public function show($id): string {
        return "Showing review: $id";
    }


    /**
     * @desc Display the form to editing a single review
     * @route GET /business-review/{id}/edit
     * @param $id
     * @return string
     */
    public function edit($id): string {
        return "<h1>Edit review: $id</h1>";
    }

    /**
     * @desc Update a review in the database
     * @route PUT /business-review/{id}
     * @param Request $request
     * @param $id
     * @return string
     */

    public function update(Request $request, $id):string {
        return "<h1>Updating review: $id</h1>";
    }

    /**
     * @desc Delete a review from database
     * @route DELETE /business-review/{id}
     * @param $id
     * @return string
     */
    public function destroy($id): string {
        return "<h1>Delete review: $id</h1>";
    }
}
