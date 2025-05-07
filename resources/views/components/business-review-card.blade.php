@props(['businessReview'])

<div class="rounded-lg shadow-md bg-white p-4">
    <h2 class="text-xl font-semibold mb-2 text-gray-800">
        {{ $businessReview ->title }}
    </h2>

    <div class="text-yellow-500 text-sm mb-2">
        @for ($i = 0; $i < $businessReview ->rating; $i++)
            ⭐
        @endfor
    </div>

    <p class="text-gray-700 text-sm">
        {{ $businessReview->comment }}
    </p>
    <div class="text-sm text-gray-500 mt-2">
        <strong>Reviewer:</strong>
        {{-- Display Anonymous if the user's name is not set --}}
        {{ $businessReview->user->first_name ?? 'Anonymous'  }} {{ $businessReview->user->last_name ?? '' }}

    </div>

    <div class="flex justify-center mt-4 space-x-4">
        <!-- Edit Button -->
        @can('update', $businessReview)
        <a href="{{ route('business-review.edit', $businessReview->id) }}"
           class="px-4 py-2 bg-gray-200 rounded-full
                       shadow-md transition duration-300 ease-in-out hover:no-underline hover:text-white hover:bg-gray-800 "
           style="text-decoration: none;"
        >Edit</a>

        <!-- Delete Form -->
        <form method="POST"
              action="{{ route('business-review.destroy', $businessReview) }}"
              onsubmit="return confirm('Are you sure you want to delete this review?')"
        >
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-full
                                 shadow-md transition duration-300 ease-in-out"
            >
                Delete
            </button>
        </form>
        @endcan

    </div>
</div>

