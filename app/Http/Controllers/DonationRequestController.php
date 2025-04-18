<?php

namespace App\Http\Controllers;

use App\Models\DonationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DonationRequestController extends Controller
{
    /**
     * @desc Display a listing of Donation Requests.
     * @route GET /donation-request
     */
    public function index(): View
    {
        $title = 'Donation Request';
        $donationRequests = DonationRequest::all();

//        $donationRequests = DonationRequest::with('donations')->get();

        return view('donation-request.index', compact('title', 'donationRequests'));
    }

    /**
     * @desc Show the form for creating a new donation request.
     * @route GET /donation-request/create
     */
    public function create(): View
    {
        $title = 'New Donation Request';
        return view('donation-request.create', compact('title'));
    }

    /**
     * @desc Store a newly created donation requests in storage.
     * @route POST /donation-request
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|boolean',
            'funding_goal' => 'required|integer',
            'featured' => 'required|boolean',

        ]);

        // Add the hardcoded business_id
        $validatedData['business_id'] = 1;

        // Create a new job listing with the validated data
        DonationRequest::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'status' => $validatedData['status'],
            'funding_goal' =>$validatedData['funding_goal'],
            'featured' => $validatedData['featured'],

        ]);

        return redirect()->route('donation-request.index')->with('success', 'donation request created successfully!');
    }




    /**
     * @desc Display a single donation request
     * @route GET /donation-request/{id}
     */
    public function show(DonationRequest $donationRequest): View
    {
//        $donationRequests = DonationRequest::with('donations')->get();
        $donationRequest->load('donations');
        $comments = $donationRequest->comments;
        $donations = $donationRequest->donations;

        return view('donation-request.show', compact('donationRequest', 'comments', 'donations'));
    }

    /**
     * @desc Show the form for editing a single donation request
     * @route GET /donation-request/{id}/edit
     */
    public function edit(string $id): string
    {
        return "Edit donation request: $id";
    }

    /**
     * @desc Update the donation request in storage.
     * @route PUT /donation-request/{id}
     */
    public function update(Request $request, string $id): string
    {
        return "You have updated donation request: $id";
    }

    /**
     * @desc Remove the donation request from storage.
     * @route DELETE /donation-request/{id}
     */
    public function destroy(string $id): string
    {
        return "You have deleted donation request: $id";
    }
}
