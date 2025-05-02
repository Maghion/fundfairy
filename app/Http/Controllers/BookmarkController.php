<?php

namespace App\Http\Controllers;

use App\Models\DonationRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        $bookmarks = $user->bookmarkedDonationRequests()->paginate(5);


        return view ('donation-request.bookmarked')->with('bookmarks', $bookmarks);
    }

    public function store(DonationRequest $donationRequest): RedirectResponse
    {
//        dd($donationRequest);

        $user = Auth::user();

        if ($user->bookmarkedDonationRequests()->where('donation_request_id', $donationRequest->id)->exists()) {
            return back()->withErrors(['status' => 'You have already bookmarked this request.']);
        } else {
            $user->bookmarkedDonationRequests()->attach($donationRequest->id);
            return back()->with('success', 'Job bookmarked successfully.');
        }
    }
}
