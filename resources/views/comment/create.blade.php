<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h1>{{ $title }}</h1>
    <form action="/comment" method="POST">
        @csrf
        <div>
            <label for="comment" class="block text-gray-700">Your Comment</label>
            <textarea name="comment" id="comment" rows="4" placeholder="Write your comment here..." class="w-full p-2 border rounded-md"></textarea>
            @error('comment')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded-md">Submit</button>
    </form>
</x-fund-fairy-layout>
