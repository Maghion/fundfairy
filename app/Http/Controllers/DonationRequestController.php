<?php

namespace App\Http\Controllers;

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
        $donationRequests = ['Request 1', 'Request 2', 'Request 3'];
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
