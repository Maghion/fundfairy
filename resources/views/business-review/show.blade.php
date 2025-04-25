<x-fund-fairy-layout>
    <x-slot name="title">Viewing {{ $review->title }}</x-slot>
    <h1 class='text-2xl'>{{ $review->title }}</h1>
    <p>{{ $review->rating }}</p>
    <p>{{ $review->comment }}</p>


        <form
            method="POST"
            action="{{ route('review.destroy', $review->id) }}"
            onsubmit="return confirm('Are you sure you want to delete this job?');"
        >
            @csrf @method('DELETE')
            <button
                type="submit"
                class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"
            >
                Delete
            </button>
        </form>
        <!-- End Delete Form -->--}}



{{--    @auth @if (auth()->user()->id === $review->user_id)--}}
{{--        <div class="flex space-x-3 ml-4">--}}
{{--            <a--}}
{{--                href="{{ route('business-review.edit', $review->id) }}"--}}
{{--                class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded"--}}
{{--            >Edit</a--}}
{{--            >--}}
{{--            <!-- Delete Form -->--}}
{{--            <form--}}
{{--                method="POST"--}}
{{--                action="{{ route('review.destroy', $review->id) }}"--}}
{{--                onsubmit="return confirm('Are you sure you want to delete this job?');"--}}
{{--            >--}}
{{--                @csrf @method('DELETE')--}}
{{--                <button--}}
{{--                    type="submit"--}}
{{--                    class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"--}}
{{--                >--}}
{{--                    Delete--}}
{{--                </button>--}}
{{--            </form>--}}
{{--            <!-- End Delete Form -->--}}
{{--        </div>--}}
{{--    @endif @endauth--}}

</x-fund-fairy-layout>



