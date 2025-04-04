<x-fund-fairy-layout>
    <div
        class="bg-white rounded-lg shadow-md w-full md:max-w-xl mx-auto mt-12 p-8 py-12"
    >
        <h2 class="text-4xl text-center font-bold mb-4">Register</h2>
        <form method="POST" action="{{ route('testimonial.store') }}">
            @csrf
            <x-inputs.text
                id="description"
                name="description"
                placeholder="Full name"
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
                Create Testimonial
            </button>
        </form>
    </div>

</x-fund-fairy-layout>
