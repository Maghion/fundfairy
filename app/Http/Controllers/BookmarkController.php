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
        $title = "Bookmarks";

        return view('donation-request.bookmarked', compact('bookmarks', 'title'));
    }

    public function store(DonationRequest $donationRequest)
    {

        $user = Auth::user();
        if($user->bookmarkedDonationRequests()->where('donation_requests_id', $donationRequest->id)->exists()){
            return back()->with('error', 'Already bookmarked');
        } else {
            $user->bookmarkedDonationRequests()->attach($donationRequest->id);
            return back()->with('success', 'Bookmarked');
        }

    }
}
