<?php

namespace App\Http\Controllers;
use App\Models\Donation;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $validatedData['user_id'] = 1;

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
    public function edit(Donation $donation): string {
        $title = 'Edit Donation';
        return view('donation.edit', compact('donation', 'title'));
    }

    /**
     * @desc Update a donation in the database
     * @route PUT /donation/{id}
     * @param Request $request
     * @param $id
     * @return string
     */
    public function update(Request $request, Donation $donation): string {
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:1|max:20000',
            'message' => 'nullable|string|max:255',
            'anon' => 'boolean',
            'type' => 'required|string|in:Singular,Weekly,Monthly'
        ]);
        $validatedData['user_id'] = 1;
        $donation->update($validatedData);
        return redirect()->route('donation.edit', $donation->id)->with('success', 'Donation updated successfully!');
    }

    /**
     * @desc Delete a donation from the database
     * @route DELETE /donation/{id}
     */
    public function destroy(Donation $donation): RedirectResponse {
        $donation->delete();
        $title = 'Delete Donation';
        return redirect()->route('donation.index')->with('success', 'Donation deleted successfully.');
    }

//
//    /**
//     * @desc Show single donation details
//     * @route GET /donation/{id}
//     * @param $id
//     * @return string
//     */
//    public function show(Donation $donation): View {
//        $title = 'Showing Donation '. $donation->id;
//        return view('donations.show', compact('title','donation'));
//    }

}
