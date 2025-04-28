<x-fund-fairy-layout>
    <div
        class="bg-white rounded-lg shadow-md w-full md:max-w-xl mx-auto mt-12 p-8 py-12"
    >
        <h2 class="text-4xl text-center font-bold mb-4">Create Business Review</h2>


        <!--Form Start-->
        <form
            method="POST"
            action="{{ route('business-review.store') }}"
            enctype="multipart/form-data"

        >
            @csrf

            <input
                type="hidden"
                name="business_id"
                value="{{ $business->id }}"

            />

            <x-inputs.text
                id="title"
                name="title"
                placeholder="Title"


            />


            <x-inputs.select
                id="rating"
                name="rating"
                label="Rating"
                :options="[5 => '⭐⭐⭐⭐⭐', 4 => '⭐⭐⭐⭐', 3 => '⭐⭐⭐', 2 => '⭐⭐', 1 => '⭐']"
                value="{{ old('rating') }}"
            />


            <x-inputs.text-area
                id="comment"
                name="comment"
                placeholder="Comment"


            />


            <button
                type="submit"
                class="w-full bg-fuchsia-950 hover:bg-violet-950 text-white px-4 py-2 rounded focus:outline-none"
            >
                Save
            </button>

        </form>
    </div>

</x-fund-fairy-layout>
