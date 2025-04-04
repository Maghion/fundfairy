<x-fund-fairy-layout>
    <x-slot name="title"> [{{$title}}]</x-slot>
    <h1>{{ $title }}</h1>
    <form action="/business-review" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title"
               value="{{ old('title') }}">

        <!-- Error Message for Title -->
        @error('title')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror

        <input type="text" name="rating" placeholder="Rating"
               value="{{ old('rating') }}">
        <!-- Error Message for Rating -->
        @error('rating')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror

        <input type="text" name="comment" placeholder="Comment"
               value="{{ old('comment') }}">
        <!-- Error Message for Comment -->
        @error('comment')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror


        <button type="submit">Submit</button>
    </form>
</x-fund-fairy-layout>
