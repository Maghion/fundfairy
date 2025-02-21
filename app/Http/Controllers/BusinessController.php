<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BusinessController extends Controller
{
    /**
     * @desc Display a listing of businesses.
     * @route GET /businesses
     */
    public function index(): View
    {
        $title = "Businesses";
        $businesses = ['Business 1', 'Business 2', 'Business 3'];
        return view('businesses.index', compact('title', 'businesses'));

    }

    /**
     * @desc Show the form for creating a new business
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
    public function store(Request $request): string
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "Title: $title, Description: $description";
    }

    /**
     * @desc Display a single business.
     * @route GET /businesses/{id}
     */
    public function show(string $id): string
    {
        return "Showing business $id";
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
     * Remove the business from storage.
     * @route DELETE /businesses/{id}
     */
    public function destroy(string $id): string
    {
        return "You have deleted business: $id";
    }

    /**
     * @desc   Save a job to favorites
     * @route  POST /businesses/{id}/save
     */
//    public function save(Business $business): string
//    {
//        return 'Save business';
//    }
}
