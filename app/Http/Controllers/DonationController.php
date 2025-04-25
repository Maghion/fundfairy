<?php

namespace App\Http\Controllers;
use App\Models\Donation;
use App\Models\DonationRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DonationController extends Controller
{
    use AuthorizesRequests;
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
    public function create(DonationRequest $donationRequest): View {
        $title = "Make Donation";
        return view('donation.create', compact('title', 'donationRequest'));
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
            'donation_request_id' => 'required|exists:donation_requests,id',
            'amount' => 'required|numeric|min:1|max:20000',
            'message' => 'nullable|string|max:255',
            'anon' => 'boolean',
            'type' => 'required|string|in:Singular,Weekly,Monthly',
        ]);

//        $validatedData['donation_request_id'] = $request->input('donation_request_id');
        $validatedData['user_id'] = auth()->id();

        // Submit to database
        Donation::create($validatedData);

        return redirect()->route('donation-request.show', $validatedData['donation_request_id'])
            ->with('success', 'Donation created successfully!');
    }

    /**
     * @desc Display a form to edit a donation
     * @route GET /donation/{id}/edit
     * @param $id
     * @return string
     */
    public function edit(Donation $donation): View {
        // Check if the user is authorized
        $this->authorize('update', $donation);

        $title = 'Edit Donation';
        return view('donation.edit', compact('donation', 'title'));
    }

    /**
     * @desc Update a donation in the database
     * @route PUT /donation/{donation}
     * @param Request $request
     * @param Donation $donation
     * @return RedirectResponse
     */
    public function update(Request $request, Donation $donation): RedirectResponse {
        $this->authorize('update', $donation);

        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:1|max:20000',
            'message' => 'nullable|string|max:255',
            'anon' => 'boolean',
            'type' => 'required|string|in:Singular,Weekly,Monthly'
        ]);

        $donation->update($validatedData);

        return redirect()->route('donation.index', $donation->id)->with('success', 'Donation updated successfully!');
    }


    /**
     * @desc Delete a donation from the database
     * @route DELETE /donation/{id}
     */
    public function destroy(Donation $donation): RedirectResponse {
        // Check if the user is authorized
        $this->authorize('delete', $donation);

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
