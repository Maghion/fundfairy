<?php

namespace App\Http\Controllers;
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
        $donations = [
            "Donation 1",
            "Donation 2",
            "Donation 3"
        ];
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
    public function store(Request $request): string {
        $token = $request->input('_token');
        $title = $request->input('title');
        $description = $request->input('description');

        return "Token: $token, Title: $title, Description: $description";
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
    public function show($id): string {
        return "<h1>Show Donation $id</h1>";
    }

}
