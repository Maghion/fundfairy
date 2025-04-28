<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\BusinessReview;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class  BusinessReviewController extends Controller
{
    use AuthorizesRequests;
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



    public function create(Business $business): View{
        $title = "Create New Review";
        return view('business-review.create', compact('title', 'business'));

    }

    /**
     * @desc Store a review in the databse
     * @route POST /business-review
     * @param Request $request
     * @return string //return datatype
     */
    public function store(Request $request):RedirectResponse {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|string:active, pending',
            'comment' => 'required|string|max:255',
            'business_id' => 'required|exists:businesses,id',

        ]);

        // Hardcoded user ID
        //$validatedData['user_id'] = 1;
        // Add the user ID of the current user
        $validatedData['user_id'] = auth()->user()->id;

        // Hardcoded business ID
        //$validatedData['business_id'] = 1;
        // Add the user ID of the current user
        //$validatedData['business_id'] = auth()->user()->id;


        // Submit to database
        BusinessReview::create($validatedData);

        return redirect()->route('businesses.show', $validatedData['business_id'])->with('success', 'Review created successfully!');

    }


    /**
     * @desc Display a single review
     * @route GET /business-review/{id}
     * @param $id
     * @return View
     */
    public function show(BusinessReview $review): View {
        return view('businesses.show', compact('review'));
    }


    /**
     * @desc Display the form to editing a single review
     * @route GET /business-review/{id}/edit
     * @param $id
     * @return string
     */
    public function edit(BusinessReview $businessReview): View {
        // Check if the user is authorized on hold

        $this->authorize('update', $businessReview);
        $title = 'Edit Single Business Review';

        return view('business-review.edit', compact('businessReview', 'title'));
    }

    /**
     * @desc Update a review in the database
     * @route PUT /business-review/{id}
     * @param Request $request
     * @param $id
     * @return string
     */

    public function update(Request $request, BusinessReview $businessReview):RedirectResponse {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|string:active, pending',
            'comment' => 'required|string|max:255',

        ]);

        $this->authorize('update', $businessReview);
        $businessReview->update($validatedData);
        //give this page
        return redirect()->route('businesses.show', $businessReview->id)->with('success', 'The Business Review was updated successfully!');

    }

    /**
     * @desc Delete a review from database
     * @route DELETE /business-review/{id}
     * @param $id
     * @return string
     */
    public function destroy(BusinessReview $businessReview): RedirectResponse   {
        // delete

        $this->authorize('delete', $businessReview);
        $businessReview->delete();
        return redirect()->route('businesses.index')->with('success', 'The business review was deleted successfully!');

    }
}
