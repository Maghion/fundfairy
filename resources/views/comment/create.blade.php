<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
{{--    <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>--}}
    <form action="/comment" method="POST" class="space-y-4">
        @csrf
        <input type="hidden" name="donation_request_id" value="{{ $donationRequest->id }}">
        <div>
            <input
                type="text"
                name="title"
                placeholder="Add a short title for your comment..."
                class="w-full p-2 border rounded-md"
                required
            >
            @error('title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <textarea name="comment" id="comment" rows="4" placeholder="Type your comment here..." class="w-full p-2 border rounded-md"></textarea>
            @error('comment')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-fuchsia-600 text-white px-4 py-2 rounded-md hover:bg-fuchsia-700">
            Submit
        </button>
    </form>
</x-fund-fairy-layout>
