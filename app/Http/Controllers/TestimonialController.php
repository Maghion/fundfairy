<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;


class TestimonialController extends Controller
{
    /**
     * @desc Show all testimonials
     * @route Get /testimonial
     * @return View
     */

    public function index(): View {
        $title = "Testimonials";
        $testimonials = [
            'testimonial 1',
            'testimonial 2',
            'testimonial 3',
            'testimonial 4',
        ];
        return view('testimonial.index', compact('title', 'testimonials'));
    }

    /**
     * @desc Show the form for creating a new testimonial
     * route GET /testimonial/create
     * @return View
     */
    public function create(): View
    {
        $title = "New Testimonial";
        return view('testimonial.create', compact('title'));
    }

    /**
     * @desc Store a newly created testimonial
     * @route POST /testimonial
     */

    public function store(Request $request){
        $title = $request->input("title");
        $description = $request->input("description");

        return "Title: $title, Description: $description";
    }

    /**
     * @desc Display a single testimonial
     * @route GET /testimonial/{id}
     */

    public function show(string $id): string{
        return "<h1>Showing testimonial: $id </h1>";
    }

    /**
     * @desc Show the form for editing a single testimonial
     * @route GET /testimonial/{id}/edit
     */

    public function edit(string $id): string{
        return "<h1>Editing testimonial: $id </h1>";
    }

    /**
     * @desc Update the testimonial request in storage.
     * @route PUT /testimonial/{id}
     */
    public function update(Request $request, string $id): string
    {
        return "<h1>You have update testimonial: $id</h1>";
    }

    /**
     * @desc Remove the testimonial from storage.
     * @route DELETE /testimonial/{id}
     */
    public function destroy(string $id): string
    {
        return "You have deleted testimonial: $id";
    }








}
