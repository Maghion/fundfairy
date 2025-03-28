<?php

namespace App\Http\Controllers;

use App\Models\BusinessReview;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class  BusinessReviewController extends Controller
{
    /**
     * @desc  Show all reviews
     * @route Get /business-review
     * @return View
     */
    public function index():View{
        $title = "View all Reviews";
        $reviews = BusinessReview::all();
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|string:active, pending',
            'comment' => 'required|string|max:255',

        ]);

        // Hardcoded user ID
        $validatedData['user_id'] = auth()->id;

        // Hardcoded business ID
        $validatedData['business_id'] = auth()->id;

        // Submit to database
        BusinessReview::create($validatedData);

        return redirect()->route('business-review.index')->with('success', 'Review created successfully!');

    }


    /**
     * @desc Display a single review
     * @route GET /business-review/{id}
     * @param $id
     * @return View
     */
    public function show(BusinessReview $review): View {
        return view('business-review.show', compact('review'));
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
