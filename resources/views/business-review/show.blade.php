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

</x-fund-fairy-layout>



