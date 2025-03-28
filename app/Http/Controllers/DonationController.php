<?php

namespace App\Http\Controllers;
use App\Models\Donation;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * @desc Display list of donation
     * @route GET /donation
     * @return View
     */
    public function index(): View {
        $title = "Donations";
        $donations = Donation::all();
        return view('donation.index', compact('title', 'donations'));
    }

    /**
     * @desc Show the form to create a new donation
     * @route GET /donation/create
     * @return View
     */
    public function create(): View {
        $title = "Make Donation";
        return view('donation.create', compact('title'));
    }

    /**
     * @desc Store a donation in the database
     * @route POST /donation
     * @param Request $request
     * @return string
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:1|max:20000',
            'message' => 'nullable|string|max:255',
            'donation_request_id' => 'required|exists:donation_requests,id',
            'anon' => 'boolean',
            'type' => 'required|string|in:Singular,Weekly,Monthly',
        ]);

        // Hardcoded user ID
        $validatedData['user_id'] = auth()->id();

//        $validatedData['donation_request_id'] = auth()->id();

        // Submit to database
        Donation::create($validatedData);

        return redirect()->route('donation.index')->with('success', 'Donation created successfully!');
    }

    /**
     * @desc Display a form to edit a donation
     * @route GET /donation/{id}/edit
     * @param $id
     * @return string
     */
    public function edit($id): string {
        return "<h1>Edit donation $id</h1>";
    }

    /**
     * @desc Update a donation in the database
     * @route PUT /donation/{id}
     * @param Request $request
     * @param $id
     * @return string
     */
    public function update(Request $request, $id): string {
        return "<h1>Update Donation $id</h1>";
    }

    /**
     * @desc Delete a donation from the database
     * @route DELETE /donation/{id}
     * @param $id
     * @return string
     */
    public function destroy($id): string {
        return "<h1>Delete donation $id</h1>";
    }


    /**
     * @desc Show single donation details
     * @route GET /donation/{id}
     * @param $id
     * @return string
     */
    public function show(Donation $donation): View {
        $title = 'Showing Donation '. $donation->id;
        return view('donations.show', compact('title','donation'));
    }

}
