<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BusinessController extends Controller
{
    /**
     * @desc Display a listing of businesses.
     * @route GET /businesses
     */
    public function index(): View
    {
        $businesses = Business::all();
        return view('businesses/index')->with('businesses', $businesses);

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
        $title = $request->input('title');
        $description = $request->input('business_description');

//        Business::create([
//            'title' => $title,
//            'business_description' => $description
//        ]);

        return redirect()->route('businesses.index');
    }

    /**
     * @desc Display a single business.
     * @route GET /businesses/{id}
     */
    public function show(Business $business): View
    {
        return view('businesses.show', compact('business'));
    }

    /**
     * @desc Show the form for editing a single business.
     * @route GET /businesses/{id}/edit
     */
    public function edit(string $id): string
    {
        return "Edit business $id";
    }

    /**
     * @desc Update the business in storage.
     * @route PUT /businesses/{id}
     */
    public function update(Request $request, string $id): string
    {
        return "You have updated business: $id";
    }

    /**
     * @desc Remove the business from storage.
     * @route DELETE /businesses/{id}
     */
    public function destroy(string $id): string
    {
        return "You have deleted business: $id";
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
