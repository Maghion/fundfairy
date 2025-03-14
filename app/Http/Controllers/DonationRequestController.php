<?php

namespace App\Http\Controllers;

use App\Models\DonationRequest;
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
        $title = 'Donation Requests';
        $donationRequests = DonationRequest::all();
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
    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "Title: $title, Description: $description";
    }

    /**
     * @desc Display a single donation request
     * @route GET /donation-request/{id}
     */
    public function show(DonationRequest $donationRequest): View
    {
        return view('donation-request.show', compact('donationRequest'));
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
