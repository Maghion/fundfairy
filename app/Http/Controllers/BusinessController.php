<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BusinessController extends Controller
{
    use AuthorizesRequests;
    /**
     * @desc Display a listing of businesses.
     * @route GET /businesses
     */
    public function index(): View
    {
        $title = 'Businesses';
        $businesses = Business::paginate(6);
        return view('businesses.index', compact('title', 'businesses'));
//        return view('businesses.index')->with('businesses', $businesses);

    }

    /**
     * @desc Show the form for creating a new business.
     * @route GET /businesses/create
     */
    public function create(): View
    {
        $title = "New Business";
        return view('businesses.create', compact('title'));
    }

    /**
     * @desc Store a newly created business in storage.
     * @route POST /businesses
     */
    public function store(Request $request): RedirectResponse
    {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'business_description' => 'nullable|string',
            'address1' => 'required|string',
            'address2' => 'nullable|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        // Create a new business listing with the validated data
        $validatedData['user_id'] = auth()->user()->id;
        $business = Business::create($validatedData);

        return redirect()->route('businesses.show', $business->id)->with('success', 'Business created successfully!');
    }

    /**
     * @desc Display a single business.
     * @route GET /businesses/{id}
     */
    public function show(Business $business): View
    {

        $business->load('businessReviews');
        $title = "Business Details: " . $business->name;
        $businessReviews= $business->businessReviews()->paginate(3, ['*'], 'reviews_page');

        return view('businesses.show', compact('title', 'business', 'businessReviews'));
    }

    /**
     * @desc Show the form for editing a single business.
     * @route GET /businesses/{id}/edit
     */
    public function edit(Business $business): View
    {
        $this->authorize('update', $business);

        return view('businesses.edit')->with('business', $business);
    }

    /**
     * @desc Update the business in storage.
     * @route PUT /businesses/{id}
     */
    public function update(Request $request, Business $business): RedirectResponse
    {
        $this->authorize('update', $business);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'business_description' => 'nullable|string',
            'address1' => 'required|string',
            'address2' => 'nullable|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        $business->update($validatedData);

        return redirect()->route('businesses.show', $business->id)->with('success', 'Business updated successfully!');    }

    /**
     * @desc Remove the business from storage.
     * @route DELETE /businesses/{id}
     */
    public function destroy(Business $business): RedirectResponse
    {
        $this->authorize('delete', $business);

        $business->delete();

        return redirect()->route('businesses.index')->with('success', 'Business deleted successfully!');
    }

    /**
     * @desc   Save a business to favorites.
     * @route  POST /businesses/{id}/save
     */
//    public function save(Business $business): string
//    {
//        return 'Save business';
//    }
}
