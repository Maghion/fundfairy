<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        // Get the authenticated user
        $user = Auth::user();

        // Get all job listings for the authenticated user
        $businesses = Business::where('user_id', $user->id)->get();

        $title = "Dashboard";

        return view('dashboard.index', compact('user', 'businesses', 'title'));
    }
}
