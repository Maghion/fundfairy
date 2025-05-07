<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <x-page-title>{{ $title }}</x-page-title>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-6">

        @forelse($reviews as $review)
            <x-business-review-card :businessReview="$review">

            </x-business-review-card>
        @empty
            <p>No Jobs Found</p>
        @endforelse

            <form
                method="POST"
                action="{{ route('business-review.destroy', $review->id) }}"
                onsubmit="return confirm('Are you sure you want to delete this job?');"
            >
                @csrf @method('DELETE')

            </form>
{{--                <button--}}
{{--                    type="submit"--}}
{{--                    class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"--}}
{{--                >--}}
{{--                    Delete--}}
{{--                </button>--}}


    </div>

    <div class="mt-4">{{ $reviews->links() }}</div>


</x-fund-fairy-layout>
