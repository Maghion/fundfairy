<x-fund-fairy-layout>
    <div
        class="bg-white rounded-lg shadow-md w-full md:max-w-xl mx-auto mt-12 p-8 py-12"
    >
        <h2 class="text-4xl text-center font-bold mb-4">Edit Testimonial</h2>

       <!--Form Start-->
        <form
            method="POST"
            action="{{ route('testimonial.update', $testimonial->id) }}"
            enctype="multipart/form-data"
        >
            @csrf
            @method("PUT")

            <x-inputs.text-area
                id="description"
                name="description"
                placeholder="Description"
                :value="old('description', $testimonial->description)"

            />
            <x-inputs.file
                id="testimonial_image"
                name="testimonial_image"
                label="Testimonial Image"
            />

            <button
                type="submit"
                class="w-full bg-violet-900 hover:bg-violet-950 text-white px-4 py-2 rounded focus:outline-none"
            >
                Update Testimonial
            </button>
        </form>
    </div>
</x-fund-fairy-layout>
