<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class TestimonialController extends Controller
{
    /**
     * @desc Show all testimonials
     * @route Get /testimonial
     * @return View
     */

    public function index(): View {
        $title = " View All Testimonials";
        $testimonials = Testimonial::all();
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

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'description' => 'required|string',
//           'testimonial_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('testimonial_image')) {
            // Store the file and get the path
            $path = $request->file('testimonial_image')->store('testimonials', 'public');

            // Add the path to the validated data array
            $validatedData['testimonial_image'] = $path;
        }

        // Hardcoded user ID
        $validatedData['user_id'] = 1;
        // Submit to database
        Testimonial::create($validatedData);
        return redirect()->route('testimonial.index')->with('success', 'Testimonial created successfully!');

    }

    /**
     * @desc Display a single testimonial
     * @route GET /testimonial/{id}
     */

    public function show(Testimonial $testimonial): View{
        return view('testimonial.show', compact('testimonial'));
    }

    /**
     * @desc Show the form for editing a single testimonial
     * @route GET /testimonial/{id}/edit
     */

    public function edit(Testimonial $testimonial): View{
        $title = 'Edit Testimonial';
        return view('testimonial.edit', compact('testimonial', 'title'));
    }


    /**
     * @desc Update the testimonial request in storage.
     * @route PUT /testimonial/{id}
     */
    public function update(Request $request, Testimonial $testimonial): RedirectResponse
    {
        $validatedData = $request->validate([
            'description' => 'required|string',
//           'testimonial_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        //Check if a file was uploaded
                if ($request->hasFile('testimonial_image')) {
                    // Delete the old company logo from storage
                    if ($testimonial->testimonial_image && Storage::disk('public')->exists($testimonial->testmonial_iamge)) {
                        Storage::disk('public')->delete($testimonial->testimonial_image);
                    }
                    // Store the file and get the path
                    $path = $request->file('testimonial_image')->store('testimonials', 'public');

                    // Add the path to the validated data array
                    $validatedData['testimonial_image'] = $path;
                }
                $testimonial->update($validatedData);
                return redirect()->route('testimonial.index', $testimonial->id)->with('success', 'Testimonial updated successfully!');

    }

    /**
     * @desc Remove the testimonial from storage.
     * @route DELETE /testimonial/{id}
     */
    public function destroy( Testimonial $testimonial): RedirectResponse
    {

       // delete the testimonial and its image if it has one
        if ($testimonial->testimonial_image && Storage::disk('public')->exists($testimonial->testimonial_image)) {
            Storage::disk('public')->delete($testimonial->testimonial_image);
        }
        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('success', 'Testimonial deleted successfully!');
       }








}
