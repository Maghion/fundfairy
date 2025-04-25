<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h2 class="text-2xl">{{ $title }}</h2>
    <div class="flex justify-end my-6" >

        @auth
        <x-fund-fairy-button-link
            url="{{ route('business-review.create') }}"
        >
            Create a business review
        </x-fund-fairy-button-link>
        @endauth
    </div>
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
{{--                <button--}}
{{--                    type="submit"--}}
{{--                    class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"--}}
{{--                >--}}
{{--                    Delete--}}
{{--                </button>--}}
            </form>

    </div>

</x-fund-fairy-layout>
