<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\DonationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controller;


class DonationRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }


    /**
     * @desc Display a listing of Donation Requests.
     * @route GET /donation-request
     */
    public function index(): View
    {
        $title = 'Donation Requests';
        $donationRequests = DonationRequest::paginate(6);


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

        // Validate form input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string',
            'funding_goal' => 'required|integer',
            'featured' => 'required|boolean',
        ]);

        // Get the logged-in user's business
        $business = Business::where('user_id', auth()->id())->first();

        if (!$business) {
            return back()->withErrors(['business_id' => 'No business found for the current user.'])->withInput();
        }

        // Add business_id to validated data
        $validatedData['business_id'] = $business->id;

        // Create donation request
        DonationRequest::create($validatedData);

        return redirect()->route('donation-request.index')->with('success', 'Donation request created successfully!');
    }

    /**
     * @desc Display a single donation request
     * @route GET /donation-request/{id}
     */
    public function show(DonationRequest $donationRequest): View
    {
//        $donationRequests = DonationRequest::with('donations')->get();
        $donationRequest->load(['donations', 'comments']);
        $title = $donationRequest->title;
        $donations = $donationRequest->donations()->paginate(5, ['*'], 'donations_page');
        $comments = $donationRequest->comments()->paginate(5, ['*'], 'comments_page');
        return view('donation-request.show', compact('donationRequest', 'comments', 'donations', 'title'));
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
