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

    public function store(DonationRequest $donationRequest)
    {
        Auth::user()->bookmarkedDonationRequests()->syncWithoutDetaching($donationRequest->id);

        return back()->with('success', 'Job bookmarked successfully.');
    }
}
